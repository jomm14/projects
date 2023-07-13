import java.util.Scanner;
public class FloopBE {
   public static void main(String args[]){
      Scanner in = new Scanner(System.in);
      int base, exp;
      System.out.println("Enter the base number ::");
      base = in.nextInt();
      int temp = base;
      
      System.out.println("Enter the exponent number ::");
      exp = in.nextInt();

      for (int i=1; i<exp; i++){
         temp = temp*temp;
      }
      System.out.println("Result of "+base+" power "+exp+" is "+temp);
   }
}