

#### User guide[¶](http://apscheduler.readthedocs.org/en/3.0/#/user-guide)


#### Installing APScheduler[¶](http://apscheduler.readthedocs.org/en/3.0/#/installing-apscheduler)
The preferred installation method is by using [pip](http://pypi.python.org/pypi/pip/):




```
$ pip install apscheduler

```






If you don’t have pip installed, you can easily install it by downloading and running
[get-pip.py](https://bootstrap.pypa.io/get-pip.py).


If, for some reason, pip won’t work, you can manually [download the APScheduler distribution](https://pypi.python.org/pypi/APScheduler/) from PyPI, extract and then install it:




```
$ python setup.py install

```











#### Code examples[¶](http://apscheduler.readthedocs.org/en/3.0/#/code-examples)
The source distribution contains the examples directory where you can find many working examples for using
APScheduler in different ways. The examples can also be
[browsed online](https://bitbucket.org/agronholm/apscheduler/src/master/examples/?at=master).







#### Basic concepts[¶](http://apscheduler.readthedocs.org/en/3.0/#/basic-concepts)
APScheduler has four kinds of components:



triggers

job stores

executors

schedulers


Triggers contain the scheduling logic. Each job has its own trigger which determines when the job should be run next.
Beyond their initial configuration, triggers are completely stateless.


Job stores house the scheduled jobs. The default job store simply keeps the jobs in memory, but others store them in
various kinds of databases. A job’s data is serialized when it is saved to a persistent job store, and deserialized when
it’s loaded back from it. Job stores (other than the default one) don’t keep the job data in memory, but act as
middlemen for saving, loading, updating and searching jobs in the backend. Job stores must never be shared between
schedulers.


Executors are what handle the running of the jobs. They do this typically by submitting the designated callable in a
job to a thread or process pool. When the job is done, the executor notifies the scheduler which them emits an
appropriate event.


Schedulers are what bind the rest together. You typically have only one scheduler running in your application.
The application developer doesn’t normally deal with the job stores, executors or triggers directly. Instead, the
scheduler provides the proper interface to handle all those. Configuring the job stores and executors is done through
the scheduler, as is adding, modifying and removing jobs.







#### Choosing the right scheduler, job stores and executors[¶](http://apscheduler.readthedocs.org/en/3.0/#/choosing-the-right-scheduler-job-stores-and-executors)
Your choice of scheduler depends mostly on your programming environment and what you’ll be using APScheduler for.
Here’s a quick guide for choosing a scheduler:




[BlockingScheduler](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/blocking.html#apscheduler.schedulers.blocking.BlockingScheduler):
use when the scheduler is the only thing running in your process


[BackgroundScheduler](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/background.html#apscheduler.schedulers.background.BackgroundScheduler):
use then you’re not using any of the frameworks below, and want the scheduler to run in the background inside your
application


AsyncIOScheduler:
use if your application uses the asyncio module


GeventScheduler:
use if your application uses gevent


TornadoScheduler:
use if you’re building a Tornado application


TwistedScheduler:
use if you’re building a Twisted application


QtScheduler:
use if you’re building a Qt application


Simple enough, yes?


To pick the appropriate job store, you need to determine whether you need job persistence or not. If you always recreate
your jobs at the start of your application, then you can probably go with the default
([MemoryJobStore](http://apscheduler.readthedocs.org/en/3.0/modules/jobstores/memory.html#apscheduler.jobstores.memory.MemoryJobStore)). But if you need your jobs to persist over scheduler restarts or
application crashes, then your choice usually boils down to what tools are used in your programming environment.
If, however, you are in the position to choose freely, then
SQLAlchemyJobStore on a [PostgreSQL](http://www.postgresql.org/) backend is
the recommended choice due to its strong data integrity protection.


Likewise, the choice of executors is usually made for you if you use one of the frameworks above.
Otherwise, the default [ThreadPoolExecutor](http://apscheduler.readthedocs.org/en/3.0/modules/executors/pool.html#apscheduler.executors.pool.ThreadPoolExecutor) should be good enough for most purposes.
If your workload involves CPU intensive operations, you should consider using
[ProcessPoolExecutor](http://apscheduler.readthedocs.org/en/3.0/modules/executors/pool.html#apscheduler.executors.pool.ProcessPoolExecutor) instead to make use of multiple CPU cores.
You could even use both at once, adding the process pool executor as a secondary executor.


You can find the plugin names of each job store and executor type in their respective API documentation pages.







#### Configuring the scheduler[¶](http://apscheduler.readthedocs.org/en/3.0/#/configuring-the-scheduler)
APScheduler provides many different ways to configure the scheduler. You can use a configuration dictionary or you can
pass in the options as keyword arguments. You can also instantiate the scheduler first, add jobs and configure the
scheduler afterwards. This way you get maximum flexibility for any environment.


The full list of scheduler level configuration options can be found on the API reference of the
[BaseScheduler](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler) class. Scheduler subclasses may also have additional options which
are documented on their respective API references. Configuration options for individual job stores and executors can
likewise be found on their API reference pages.


Let’s say you want to run BackgroundScheduler in your application with the default job store and the default executor:




```
from apscheduler.schedulers.background import BackgroundScheduler


scheduler = BackgroundScheduler()

# Initialize the rest of the application here, or before the scheduler initialization

```






This will get you a BackgroundScheduler with a MemoryJobStore named “default” and a ThreadPoolExecutor named “default”
with a default maximum thread count of 10.


Now, suppose you want more. You want to have two job stores using two executors and you also want to tweak the
default values for new jobs and set a different timezone.
The following three examples are completely equivalent, and will get you:



a MongoDBJobStore named “mongo”

an SQLAlchemyJobStore named “default” (using SQLite)

a ThreadPoolExecutor named “default”, with a worker count of 20

a ProcessPoolExecutor named “processpool”, with a worker count of 5

UTC as the scheduler’s timezone

coalescing turned off for new jobs by default

a default maximum instance limit of 3 for new jobs


Method 1:




```
from pytz import utc

from apscheduler.schedulers.background import BackgroundScheduler
from apscheduler.jobstores.mongodb import MongoDBJobStore
from apscheduler.jobstores.sqlalchemy import SQLAlchemyJobStore
from apscheduler.executors.pool import ThreadPoolExecutor, ProcessPoolExecutor


jobstores = {
    'mongo': MongoDBJobStore(),
    'default': SQLAlchemyJobStore(url='sqlite:///jobs.sqlite')
}
executors = {
    'default': ThreadPoolExecutor(20),
    'processpool': ProcessPoolExecutor(5)
}
job_defaults = {
    'coalesce': False,
    'max_instances': 3
}
scheduler = BackgroundScheduler(jobstores=jobstores, executors=executors, job_defaults=job_defaults, timezone=utc)

```






Method 2:




```
from apscheduler.schedulers.background import BackgroundScheduler


# The "apscheduler." prefix is hard coded
scheduler = BackgroundScheduler({
    'apscheduler.jobstores.mongo': {
         'type': 'mongodb'
    },
    'apscheduler.jobstores.default': {
        'type': 'sqlalchemy',
        'url': 'sqlite:///jobs.sqlite'
    },
    'apscheduler.executors.default': {
        'class': 'apscheduler.executors.pool:ThreadPoolExecutor',
        'max_workers': '20'
    },
    'apscheduler.executors.processpool': {
        'type': 'processpool',
        'max_workers': '5'
    },
    'apscheduler.job_defaults.coalesce': 'false',
    'apscheduler.job_defaults.max_instances': '3',
    'apscheduler.timezone': 'UTC',
})

```






Method 3:




```
from pytz import utc

from apscheduler.schedulers.background import BackgroundScheduler
from apscheduler.jobstores.sqlalchemy import SQLAlchemyJobStore
from apscheduler.executors.pool import ProcessPoolExecutor


jobstores = {
    'mongo': {'type': 'mongodb'},
    'default': SQLAlchemyJobStore(url='sqlite:///jobs.sqlite')
}
executors = {
    'default': {'type': 'threadpool', 'max_workers': 20},
    'processpool': ProcessPoolExecutor(max_workers=5)
}
job_defaults = {
    'coalesce': False,
    'max_instances': 3
}
scheduler = BackgroundScheduler()

# .. do something else here, maybe add jobs etc.

scheduler.configure(jobstores=jobstores, executors=executors, job_defaults=job_defaults, timezone=utc)

```











#### Starting the scheduler[¶](http://apscheduler.readthedocs.org/en/3.0/#/starting-the-scheduler)
Starting the scheduler is done by simply calling [start()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.start) on the
scheduler. For schedulers other than ~apscheduler.schedulers.blocking.BlockingScheduler, this call will return
immediately and you can continue the initialization process of your application, possibly adding jobs to the scheduler.


For BlockingScheduler, you will only want to call [start()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.start) after you’re
done with any initialization steps.



Note


After the scheduler has been started, you can no longer alter its settings.










#### Adding jobs[¶](http://apscheduler.readthedocs.org/en/3.0/#/adding-jobs)
There are two ways to add jobs to a scheduler:



by calling [add_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.add_job)


by decorating a function with [scheduled_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.scheduled_job)



The first way is the most common way to do it. The second way is mostly a convenience to declare jobs that don’t change
during the application’s run time. The [add_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.add_job) method returns a
[apscheduler.job.Job](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job) instance that you can use to modify or remove the job later.


You can schedule jobs on the scheduler 

#### at any time

. If the scheduler is not yet running when the job is added, the
job will be scheduled tentatively and its first run time will only be computed when the scheduler starts.


It is important to note that if you use an executor or job store that serializes the job, it will add a couple
requirements on your job:



The target callable must be globally accessible

Any arguments to the callable must be serializable


Of the builtin job stores, only MemoryJobStore doesn’t serialize jobs.
Of the builtin executors, only ProcessPoolExecutor will serialize jobs.



Important


If you schedule jobs in a persistent job store during your application’s initialization, you 

#### MUST


define an explicit ID for the job and use replace_existing=True or you will get a new copy of the job every time
your application restarts!






Tip


To run a job immediately, omit trigger argument when adding the job.










#### Removing jobs[¶](http://apscheduler.readthedocs.org/en/3.0/#/removing-jobs)
When you remove a job from the scheduler, it is removed from its associated job store and will not be executed anymore.
There are two ways to make this happen:



by calling [remove_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.remove_job) with the job’s ID and job store alias

by calling [remove()](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job.remove) on the Job instance you got from
[add_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.add_job)



The latter method is probably more convenient, but it requires that you store somewhere the
[Job](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job) instance you received when adding the job. For jobs scheduled via the
[scheduled_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.scheduled_job), the first way is the only way.


If the job’s schedule ends (i.e. its trigger doesn’t produce any further run times), it is automatically removed.


Example:




```
job = scheduler.add_job(myfunc, 'interval', minutes=2)
job.remove()

```






Same, using an explicit job ID:




```
scheduler.add_job(myfunc, 'interval', minutes=2, id='my_job_id')
scheduler.remove_job('my_job_id')

```











#### Pausing and resuming jobs[¶](http://apscheduler.readthedocs.org/en/3.0/#/pausing-and-resuming-jobs)
You can easily pause and resume jobs through either the [Job](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job) instance or the scheduler itself.
When a job is paused, its next run time is cleared and no further run times will be calculated for it until the job is
resumed. To pause a job, use either method:



[apscheduler.job.Job.pause()](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job.pause)

[apscheduler.schedulers.base.BaseScheduler.pause_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.pause_job)


To resume:



[apscheduler.job.Job.resume()](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job.resume)

[apscheduler.schedulers.base.BaseScheduler.resume_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.resume_job)







#### Getting a list of scheduled jobs[¶](http://apscheduler.readthedocs.org/en/3.0/#/getting-a-list-of-scheduled-jobs)
To get a machine processable list of the scheduled jobs, you can use the
[get_jobs()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.get_jobs) method. It will return a list of
[Job](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job) instances. If you’re only interested in the jobs contained in a particular job store,
then give a job store alias as the second argument.


As a convenience, you can use the [print_jobs()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.print_jobs) method which will print
out a formatted list of jobs, their triggers and next run times.







#### Modifying jobs[¶](http://apscheduler.readthedocs.org/en/3.0/#/modifying-jobs)
You can modify any job attributes by calling either [apscheduler.job.Job.modify()](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job.modify) or
[modify_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.modify_job). You can modify any Job attributes except for id.


Example:




```
job.modify(max_instances=6, name='Alternate name')

```






If you want to reschedule the job – that is, change its trigger, you can use either
[apscheduler.job.Job.reschedule()](http://apscheduler.readthedocs.org/en/3.0/modules/job.html#apscheduler.job.Job.reschedule) or [reschedule_job()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.reschedule_job).
These methods construct a new trigger for the job and recalculate its next run time based on the new trigger.


Example:




```
scheduler.reschedule_job('my_job_id', trigger='cron', minute='*/5')

```











#### Shutting down the scheduler[¶](http://apscheduler.readthedocs.org/en/3.0/#/shutting-down-the-scheduler)
To shut down the scheduler:




```
scheduler.shutdown()

```






By default, the scheduler shuts down its job stores and executors and waits until all currently executing jobs are
finished. If you don’t want to wait, you can do:




```
scheduler.shutdown(wait=False)

```






This will still shut down the job stores and executors but does not wait for any running
tasks to complete.







#### Limiting the number of concurrently executing instances of a job[¶](http://apscheduler.readthedocs.org/en/3.0/#/limiting-the-number-of-concurrently-executing-instances-of-a-job)
By default, only one instance of each job is allowed to be run at the same time.
This means that if the job is about to be run but the previous run hasn’t finished yet, then the latest run is
considered a misfire. It is possible to set the maximum number of instances for a particular job that the scheduler will
let run concurrently, by using the max_instances keyword argument when adding the job.







#### Missed job executions and coalescing[¶](http://apscheduler.readthedocs.org/en/3.0/#/missed-job-executions-and-coalescing)
Sometimes the scheduler may be unable to execute a scheduled job at the time it was scheduled to run.
The most common case is when a job is scheduled in a persistent job store and the scheduler is shut down and restarted
after the job was supposed to execute. When this happens, the job is considered to have “misfired”.
The scheduler will then check each missed execution time against the job’s misfire_grace_time option (which can be
set on per-job basis or globally in the scheduler) to see if the execution should still be triggered.
This can lead into the job being executed several times in succession.


If this behavior is undesirable for your particular use case, it is possible to use coalescing to roll all these
missed executions into one. In other words, if coalescing is enabled for the job and the scheduler sees one or more
queued executions for the job, it will only trigger it once. No misfire events will be sent for the “bypassed” runs.







#### Scheduler events[¶](http://apscheduler.readthedocs.org/en/3.0/#/scheduler-events)
It is possible to attach event listeners to the scheduler. Scheduler events are fired on certain occasions, and may
carry additional information in them concerning the details of that particular event.
It is possible to listen to only particular types of events by giving the appropriate mask argument to
[add_listener()](http://apscheduler.readthedocs.org/en/3.0/modules/schedulers/base.html#apscheduler.schedulers.base.BaseScheduler.add_listener), OR’ing the different constants together.
The listener callable is called with one argument, the event object.


See the documentation for the [events](http://apscheduler.readthedocs.org/en/3.0/modules/events.html#module-apscheduler.events) module for specifics on the available events and their
attributes.


Example:




```
def my_listener(event):
    if event.exception:
        print('The job crashed :(')
    else:
        print('The job worked :)')

scheduler.add_listener(my_listener, EVENT_JOB_EXECUTED | EVENT_JOB_ERROR)

```











#### Reporting bugs[¶](http://apscheduler.readthedocs.org/en/3.0/#/reporting-bugs)
A [bug tracker](https://bitbucket.org/agronholm/apscheduler/issues?status-new&amp;status-open)
is provided by bitbucket.org.







#### Getting help[¶](http://apscheduler.readthedocs.org/en/3.0/#/getting-help)
If you have problems or other questions, you can either:



Ask on the #apscheduler channel on [Freenode IRC](http://freenode.net/irc_servers.shtml)


Ask on the [APScheduler Google group](http://groups.google.com/group/apscheduler), or

Ask on [StackOverflow](http://stackoverflow.com/questions/tagged/apscheduler) and tag your question with the
apscheduler tag







