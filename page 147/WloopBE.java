import java.util.Scanner;
public class WloopBE {
   public static void main(String args[]){
      Scanner in = new Scanner(System.in);
      int base, exp, i=0;
      System.out.println("Enter the base number ::");
      base = in.nextInt();
      int temp = base;
      
      System.out.println("Enter the exponent number ::");
      exp = in.nextInt();

      while (i<exp){
         temp = temp*temp;
         i++;
      }
      System.out.println("Result of "+base+" power "+exp+" is "+temp);
   }
}