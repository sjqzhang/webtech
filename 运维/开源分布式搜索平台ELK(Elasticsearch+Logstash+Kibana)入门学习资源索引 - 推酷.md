


#### 开源分布式搜索平台ELK(Elasticsearch+Logstash+Kibana)入门学习资源索引




[http://blog.csdn.net/gaoyingju/article/details/23750563](http://blog.csdn.net/gaoyingju/article/details/23750563?utm_source=tuicool)







博主近4个月搜索数以百计的内容，甄选了以下有用的中英文slides以及blogs分享出来, 内容包括分布式索引与搜索服务Elasticsearch, logstash,数据可视化服务Kibana的学习资源，可以极大减少入门ELK的时间成本:





#### 1.ELK整体介绍



(必看) Using elasticsearch, logstash & kibana to create realtime dashboards


[https://speakerdeck.com/elasticsearch/using-elasticsearch-logstash-and-kibana-to-create-realtime-dashboards](https://speakerdeck.com/elasticsearch/using-elasticsearch-logstash-and-kibana-to-create-realtime-dashboards)



Elasticsearch官方的slide


(必看) Collect & visualize your logs with Logstash, Elasticsearch & Redis


[http://michael.bouvy.net/blog/en/2013/11/19/collect-visualize-your-logs-logstash-elasticsearch-redis-kibana/](http://michael.bouvy.net/blog/en/2013/11/19/collect-visualize-your-logs-logstash-elasticsearch-redis-kibana/)



对搭建ELK平台的具体操作做了详细介绍。


(必看)2014 SCALE12X-Introduction to Elasticsearch, Logstash and Kibana


[https://speakerdeck.com/elasticsearch/scale-12x-introduction-to-elasticsearch-logstash-and-kibana](https://speakerdeck.com/elasticsearch/scale-12x-introduction-to-elasticsearch-logstash-and-kibana)



Elasticsearch的说明占50%,logstash的说明占40%,Kibana的说明占10%


使用logstash+elasticsearch+kibana快速搭建日志平台


[http://www.cnblogs.com/buzzlight/p/logstash_elasticsearch_kibana_log.html](http://www.cnblogs.com/buzzlight/p/logstash_elasticsearch_kibana_log.html)



Kibana+Logstash+Elasticsearch 日志查询系统


[http://enable.blog.51cto.com/747951/1049411](http://enable.blog.51cto.com/747951/1049411)



Log Analytics Using Elasticsearch-Logstash-Kibana(Part 1)


[http://blog.nugrahais.me/blog/2013/12/23/log-analytics-using-elasticsearch-logstash-kibana-part-1/](http://blog.nugrahais.me/blog/2013/12/23/log-analytics-using-elasticsearch-logstash-kibana-part-1/)



Using ElasticSearch and Logstash to Serve Billions of Searchable Events for Customers


[http://www.elasticsearch.org/blog/using-elasticsearch-and-logstash-to-serve-billions-of-searchable-events-for-customers/](http://www.elasticsearch.org/blog/using-elasticsearch-and-logstash-to-serve-billions-of-searchable-events-for-customers/)



使用ELK的一个案例介绍



#### 2.logstash介绍



(必看) Logstash -Nicolas Szalay


[http://slides.com/aurelienrougemont/logstash/](http://slides.com/aurelienrougemont/logstash/)



(必看) Getting started with Logstash - New to Logstash? Start here!


[http://logstash.net/docs/1.4.0/tutorials/getting-started-with-logstash](http://logstash.net/docs/1.4.0/tutorials/getting-started-with-logstash)



 


(必看) Logstash-Jordan Sissel


[http://semicomplete.com/presentations/logstash-scale11x/#/](http://semicomplete.com/presentations/logstash-scale11x/#/)



Logstash and friends


[http://www.slideshare.net/roidelapluie/logstash-and-friends?qid=0c61ce8f-1a87-4678-a9c7-61a18ae74993&v=default&b=&from_search=11](http://www.slideshare.net/roidelapluie/logstash-and-friends?qid=0c61ce8f-1a87-4678-a9c7-61a18ae74993&v=default&b=&from_search=11)



Logstash


[http://www.slideshare.net/startit/logstash-29012201?qid=0c61ce8f-1a87-4678-a9c7-61a18ae74993&v=default&b=&from_search=7](http://www.slideshare.net/startit/logstash-29012201?qid=0c61ce8f-1a87-4678-a9c7-61a18ae74993&v=default&b=&from_search=7)



page 11 to page 32：直观的罗列了一些input,filter,output,讲解了一下grok pattern


Starting out with grok in Logstash


[http://antonlindstrom.com/2012/09/24/starting-out-with-grok-in-logstash.html](http://antonlindstrom.com/2012/09/24/starting-out-with-grok-in-logstash.html)



介绍Logstash Grok Filter


(重要) Logstash1.4.0 Grok Filter Docs


[http://logstash.net/docs/1.4.0/filters/grok](http://logstash.net/docs/1.4.0/filters/grok)



(重要) Logstash1.4.0 Grok Filter 的 Predefined Patterns


[https://github.com/elasticsearch/logstash/tree/v1.4.0/patterns](https://github.com/elasticsearch/logstash/tree/v1.4.0/patterns)



如BASE10NUM的Predefined Pattern是 (?<![0-9.+-])(?>[+-]?(?:(?:[0-9]+(?:\.[0-9]+)?)|(?:\.[0-9]+)))


(重要)[http://grokdebug.herokuapp.com/](http://grokdebug.herokuapp.com/)



可以用来学习和测试Grok匹配的一个网站



#### 3.Elasticsearch介绍



(必看) Elasticsearch :Search made easy for (web) developers


[http://spinscale.github.io/elasticsearch/2012-03-jugm.html#/](http://spinscale.github.io/elasticsearch/2012-03-jugm.html#/)



(必看) Getting Down and dirty with Elasticsearch


[http://www.slideshare.net/clintongormley/down-and-dirty-with-elasticsearch](http://www.slideshare.net/clintongormley/down-and-dirty-with-elasticsearch)



200pages+的slide,对Elasticsearch的Rest API介绍的比较多


(必看) Elasticsearch :Pluggable architecture under the hood


[http://spinscale.github.io/elasticsearch-intro-plugins/#/](http://spinscale.github.io/elasticsearch-intro-plugins/#/)



(必看) Exploring Elasticsearch


[http://exploringelasticsearch.com/](http://exploringelasticsearch.com/)



系统的介绍了Elasticsearch, 当然这本书“Elasticsearch Server”比它更全面、细节更多


(必看) Terms of endearment - the ElasticSearch Query DSL explained


[http://www.slideshare.net/clintongormley/terms-of-endearment-the-elasticsearch-query-dsl-explained](http://www.slideshare.net/clintongormley/terms-of-endearment-the-elasticsearch-query-dsl-explained)



Apache Lucene - Query Parser Syntax


(1)[http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#query-string-syntax](http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#query-string-syntax)



[(2) http://lucene.apache.org/core/4_6_0/queryparser/org/apache/lucene/queryparser/classic/package-summary.html#Overview](http://lucene.apache.org/core/4_6_0/queryparser/org/apache/lucene/queryparser/classic/package-summary.html#Overview)



Lucene的Query语法格式


Learning Elasticsearch


[http://slides.com/garyelephant/learning-elasticsearch](http://slides.com/garyelephant/learning-elasticsearch)



推荐一下我制作的slide, 参考了很多资料集百家之所长、有针对性做的，从各方面介绍Elasticsearch, 内容不断更新中。


(重要) Elasticsearch References: Glossary of terms


[http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/glossary.html#glossary](http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/glossary.html#glossary)



Elasticsearch的一些核心概念


(重要) What is an ElasticSearch Index?


[http://euphonious-intuition.com/2013/02/what-is-an-elasticsearch-index/](http://euphonious-intuition.com/2013/02/what-is-an-elasticsearch-index/)



详细介绍Index


(重要) An introduction to mapping in elasticsearch


[http://euphonious-intuition.com/2012/07/an-introduction-to-mapping-in-elasticsearch/](http://euphonious-intuition.com/2012/07/an-introduction-to-mapping-in-elasticsearch/)






Elasticsearch Facets


[http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/search-facets.html](http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/search-facets.html)






Elasticsearch Aggregations Overview


[http://chrissimpson.co.uk/elasticsearch-aggregations-overview.html](http://chrissimpson.co.uk/elasticsearch-aggregations-overview.html)



Elastic Search Training#1 (brief tutorial)-ESCC#1


[http://www.slideshare.net/medcl/elastic-search-training1-brief-tutorial](http://www.slideshare.net/medcl/elastic-search-training1-brief-tutorial)



Lucene Scoring and elasticsearch’s _all Field


[http://jontai.me/blog/2012/10/lucene-scoring-and-elasticsearch-_all-field/](http://jontai.me/blog/2012/10/lucene-scoring-and-elasticsearch-_all-field/)



Elasticsearch 数据的score计算





Advanced Scoring in elasticsearch


[http://jontai.me/blog/2013/01/advanced-scoring-in-elasticsearch/](http://jontai.me/blog/2013/01/advanced-scoring-in-elasticsearch/)



Elasticsearch 数据的score计算



#### 4.Elasticsearch优化



elasticsearch configuration


[http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/setup-configuration.html#setup-configuration-memory](http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/setup-configuration.html#setup-configuration-memory)



elasticsearch configuration and performance tuning.html


[http://weiweiwang.github.io/elasticsearch-configuration-and-performance-tuning.html](http://weiweiwang.github.io/elasticsearch-configuration-and-performance-tuning.html)



ElasticSearch Training#2 (advanced concepts)-ESCC#1


[http://www.slideshare.net/medcl/elastic-search-training2-advanced-concepts](http://www.slideshare.net/medcl/elastic-search-training2-advanced-concepts)



Elasticsearch的性能优化，查询优化等技巧


Elasticsearch Java Virtual Machine settings explained


[http://jprante.github.io/2012/11/28/Elasticsearch-Java-Virtual-Machine-settings-explained.html](http://jprante.github.io/2012/11/28/Elasticsearch-Java-Virtual-Machine-settings-explained.html)



ElasticSearch and Logstash Tuning


[http://jablonskis.org/2013/elasticsearch-and-logstash-tuning/](http://jablonskis.org/2013/elasticsearch-and-logstash-tuning/)






Elasticsearch Plugin: Marvel


[http://www.elasticsearch.org/overview/marvel/](http://www.elasticsearch.org/overview/marvel/)



Elasticsearch.org发布的Elasticsearch集群监控工具


Elasticsearch Plugin: Head


[https://github.com/mobz/elasticsearch-head](https://github.com/mobz/elasticsearch-head)



Elasticsearch Plugin: Bigdesk - Live charts and statistics for elasticsearch cluster.


[http://bigdesk.org/](http://bigdesk.org/)



Elasticsearch Plugin: Paramedic


[https://github.com/karmi/elasticsearch-paramedic](https://github.com/karmi/elasticsearch-paramedic)



Scaling Massive Elasticsearch Clusters


[http://www.slideshare.net/sematext/scaling-massive-elasticsearch-clusters](http://www.slideshare.net/sematext/scaling-massive-elasticsearch-clusters)



Elasticsearch集群



#### 5.Kibana介绍



(必看) 10 Minute Walk Through Kibana


[http://www.elasticsearch.org/guide/en/kibana/current/using-kibana-for-the-first-time.html](http://www.elasticsearch.org/guide/en/kibana/current/using-kibana-for-the-first-time.html)



Elasticsearch.org官方的Guide, 最近刚发布的。


 





Kibana Overview


[http://www.elasticsearch.org/overview/kibana/](http://www.elasticsearch.org/overview/kibana/)



 





What’s Cooking in Kibana


[http://www.elasticsearch.org/blog/whats-cooking-kibana/](http://www.elasticsearch.org/blog/whats-cooking-kibana/)



 





Kibana 3: Milestone 4


[http://www.elasticsearch.org/blog/kibana-3-milestone-4/](http://www.elasticsearch.org/blog/kibana-3-milestone-4/)



Kibana3.m4的新功能特性


Kibana入門-Yusuke Mito


[https://speakerdeck.com/y310/kibanaru-men?slide=23](https://speakerdeck.com/y310/kibanaru-men?slide=23)



page23 ~ page37里面有各种panel的截图



#### 6.最根本最重要的Resources



(1) Elasticsearch团队博客，每周更新


[http://www.elasticsearch.org/blog](http://www.elasticsearch.org/blog)



(2) Elasticsearch最新版本的API References


[http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/index.html](http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/index.html)



 


(3) logstash 1.4.0 的documents


[http://logstash.net/docs/1.4.0/](http://logstash.net/docs/1.4.0/)



(4) Kibana最新版本的documents


[http://www.elasticsearch.org/guide/en/kibana/current/index.html](http://www.elasticsearch.org/guide/en/kibana/current/index.html)




#### 7.推荐2本书籍



"Elasticsearch Server"


"Mastering Elasticsearch"



转载本文请注明作者和出处[Gary的影响力]http://garyelephant.me，请勿用于任何商业用途！








 