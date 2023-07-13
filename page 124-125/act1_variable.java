import java.io.*;

public class act1_variable{
	public static void main(String[] args){
		//show what you declared 
		int number = 10;
		char letter = 'a';
		boolean result = true;
		String str = "hello";
		System.out.println("Number = "+number);
		System.out.println("Letter = "+letter);
		System.out.println("Boolean = "+result);
		System.out.println("String = "+str);

		//new codes finding the average
		System.out.println("");
		System.out.println("");

		int num1 = 10, num2 = 20, num3 = 45, ave;
		ave=(num1+num2+num3)/3;
		System.out.println("number 1 = "+num1);
		System.out.println("number 2 = "+num2);
		System.out.println("number 3 = "+num3);
		System.out.println("Average is = "+ave);

		//new codes finding the largest value page 125
		System.out.println("");

		int number1 = 10, number2 = 23, number3 = 5; 
		System.out.println("Number 1 = "+number1);
		System.out.println("Number 2 = "+number2);
		System.out.println("Number 3 = "+number3);

		if( number1 >= number2 && num1 >= number3)
        	System.out.println(number1+" is the largest Number 1");

      	else if (number2 >= number1 && number2 >= number3)
        	System.out.println(number2+" is the largest Number 2 ");

      	else
        	System.out.println(number3+" is the largest Number 3");


        //new codes precedence
        

	}
}