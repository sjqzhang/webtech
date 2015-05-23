import java.io.IOException;

public class CPUTest {
    public static void main(String[] args) {

        CPUTestThread cpuTestThread = new CPUTestThread();
        for (int i = 0; i < 30; i++) {
            Thread cpuTest = new Thread(cpuTestThread);
            cpuTest.start();
        }


        try {
            Runtime.getRuntime().exec("taskmgr");
        } catch (IOException e1) {
            e1.printStackTrace();
        }
    }
}

class CPUTestThread implements Runnable {

    @Override
        public void run() {
            int busyTime = 10;
            int idleTime = busyTime;
            long startTime = 0;
            while (true) {
                startTime = System.currentTimeMillis();
                //System.out.println(System.currentTimeMillis()+","+startTime+","+(System.currentTimeMillis() - startTime));


                while ((System.currentTimeMillis() - startTime) <= busyTime)
                    ;

                try {
                    Thread.sleep(idleTime);
                } catch (InterruptedException e) {
                    System.out.println(e);
                }
            }

        }

}
