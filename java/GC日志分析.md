
     



首先，给出一个日志输出的例子：


参数设置为：


-XX:+PrintGCDetails -XX:-UseAdaptiveSizePolicy -XX:SurvivorRatio=8 -XX:NewSize=10M -XX:MaxNewSize=10M


参数解释：


-XX:+PrintGCDetails 启用日志


-XX:-UseAdaptiveSizePolicy
 禁用动态调整，使SurvivorRatio可以起作用




-XX:SurvivorRatio=8
 设置Eden:Survivior=8




-XX:NewSize=10M
 -XX:MaxNewSize=10M 设置整个新生代的大小为10M




默认垃圾收集器为：Parallel
 Scavenge


输出结果为：


[GC [PSYoungGen: 4423K->320K(9216K)] 4423K->320K(58880K), 0.0011900 secs] [Times: user=0.01 sys=0.00, real=0.01 secs] 


[Full GC (System) [PSYoungGen: 320K->0K(9216K)] [ParOldGen: 0K->222K(49664K)] 320K->222K(58880K) [PSPermGen: 2458K->2456K(21248K)], 0.0073610 secs] [Times: user=0.01 sys=0.00, real=0.00 secs] 


Heap


 PSYoungGen      total 9216K, used 491K [0x00000000ff600000, 0x0000000100000000, 0x0000000100000000)


  eden space 8192K, 6% used [0x00000000ff600000,0x00000000ff67af50,0x00000000ffe00000)


  from space 1024K, 0% used [0x00000000ffe00000,0x00000000ffe00000,0x00000000fff00000)


  to   space 1024K, 0% used [0x00000000fff00000,0x00000000fff00000,0x0000000100000000)


 ParOldGen       total 49664K, used 222K [0x00000000c5800000, 0x00000000c8880000, 0x00000000ff600000)


  object space 49664K, 0% used [0x00000000c5800000,0x00000000c58378a0,0x00000000c8880000)


 PSPermGen       total 21248K, used 2466K [0x00000000c0600000, 0x00000000c1ac0000, 0x00000000c5800000)


  object space 21248K, 11% used [0x00000000c0600000,0x00000000c0868b48,0x00000000c1ac0000)





















#### 前半段分析：




GC （minor ）日志




![http://img.blog.csdn.net/20131002100114703?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast](http://img.blog.csdn.net/20131002100114703?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast)




Full GC 日志




![http://img.blog.csdn.net/20131002100112187?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast](http://img.blog.csdn.net/20131002100112187?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast)


























#### 后半段分析：






#### ![http://img.blog.csdn.net/20130930164842000?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast](http://img.blog.csdn.net/20130930164842000?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast)![http://img.blog.csdn.net/20130930164907500?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast](http://img.blog.csdn.net/20130930164907500?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQveXhjMTM1/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast)






####   

对照上面的图，GC日志中的PSYoungGen（PS是指Parallel
 Scavenge）为Eden+FromSpace，而整个YoungGeneration为Eden+FromSpace+ToSpace。


  我们设置的新生代大小为10240K，这包括9216K大小的PSYoungGen和1024K大小的ToSpace。其中，PSYoungGen中的Eden:FromSpace为8:1，


这包括8192K的Eden和1024K的FromSpace。


  关于老年代和永久代的输出比较简单，不再详述。







更详细描述参见官方文档：[http://www.oracle.com/technetwork/java/javase/gc-tuning-6-140523.html](http://www.oracle.com/technetwork/java/javase/gc-tuning-6-140523.html)












  最后注意，如果新生代的空间不能刚好按比例划分，则可能有一定的误差。比如，将上述的参数中SurvivorRatio改为10，则输出如下：


[GC [PSYoungGen: 4439K->320K(9408K)] 4439K->320K(59072K), 0.0010120 secs] [Times: user=0.00 sys=0.00, real=0.00 secs] 


[Full GC (System) [PSYoungGen: 320K->0K(9408K)] [ParOldGen: 0K->222K(49664K)] 320K->222K(59072K) [PSPermGen: 2458K->2456K(21248K)], 0.0095710 secs] [Times: user=0.02 sys=0.00, real=0.00 secs] 


Heap


 PSYoungGen      total 9408K, used 514K [0x00000000ff600000, 0x0000000100000000, 0x0000000100000000)


  eden space 8576K, 6% used [0x00000000ff600000,0x00000000ff680b78,0x00000000ffe60000)


  from space 832K, 0% used [0x00000000ffe60000,0x00000000ffe60000,0x00000000fff30000)


  to   space 832K, 0% used [0x00000000fff30000,0x00000000fff30000,0x0000000100000000)


 ParOldGen       total 49664K, used 222K [0x00000000c5800000, 0x00000000c8880000, 0x00000000ff600000)


  object space 49664K, 0% used [0x00000000c5800000,0x00000000c58378a0,0x00000000c8880000)


 PSPermGen       total 21248K, used 2466K [0x00000000c0600000, 0x00000000c1ac0000, 0x00000000c5800000)


  object space 21248K, 11% used [0x00000000c0600000,0x00000000c0868b48,0x00000000c1ac0000)


  可以看到新生代的相关数值是有一定误差的。




学习测试代码

```java


/**
* <b>项目名：</b>test<br/>
* <b>包名：</b>com.yhj.jvm.gc.edenFirst<br/>
* <b>文件名：</b>BigObjIntoOld.java<br/>
* <b>版本信息：</b> @version 1.0.0<br/>
* <b>日期：</b>2016-9-8-下午4:48:59<br/>
* <b>Copyright (c)</b> 2016魅族公司-版权所有<br/>
*
*/
	


package com.yhj.jvm.gc.bigObjIntoOld;

import java.util.HashMap;

/**
 * @Described：大对象直接进入老生代测试
 * VM params : -Xms20M -Xmx20M -Xmn10M -XX:+PrintGCDetails -verbose:gc
 * Edon s0 s1 old
 *   8  1   1  10
 * @author YHJ create at 2012-1-3 下午05:28:47
 * @FileNmae com.yhj.jvm.gc.bigObjIntoOld.BigObjIntoOld.java
 */
public class BigObjIntoOld {
 
    private final static int ONE_MB = 1024*1024;
 
    /**
     * @param args
     * @Author YHJ create at 2012-1-3 下午04:44:38
     */
    public static void main(String[] args) {
       @SuppressWarnings("unused")
       byte[] testCase1,testCase2,testCase3,testCase4;
//       testCase1 = new byte[1*ONE_MB];
//     testCase2 = new byte[2*ONE_MB];
//     testCase3 = new byte[2*ONE_MB];
//     testCase1 = null;
//     testCase2 = null;
//     testCase3 = null;
//     testCase4 = new byte[2*ONE_MB];
       
       HashMap<Integer, Object> map=new HashMap<Integer, Object>();
       
       System.gc();
       
       
       
       while(true) {
    	   
    	   try{
    	   
    	   for(int i=0;i<300;i++) {
    		   
    		   map.put(i, new byte[(int) (3 *ONE_MB)] );
    		   System.gc();
//    		   map.clear();
//    		   System.gc();
    		   
    		   try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
    	      	   
    	   }
    	   }catch (Throwable e) {
    		   map.clear();
			// TODO: handle exception
		}
    	   
       }
    }
 
}
```










   






