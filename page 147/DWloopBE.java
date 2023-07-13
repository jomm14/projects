import java.util.Scanner;
public class DWloopBE {
   public static void main(String args[]){
      Scanner in = new Scanner(System.in);
      int base, exp, i=1;
      System.out.println("Enter the base number ::");
      base = in.nextInt();
      int temp = base;
      
      System.out.println("Enter the exponent number ::");
      exp = in.nextInt();

      do{
         
         i++;
         temp = temp*temp;
      }
      while(i<exp);
      System.out.println("Result of "+base+" power "+exp+" is "+temp);
   }
}