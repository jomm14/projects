import java.util.*;
public class NumberInWordsIFELSE{
	 public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int[] num =  {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
		System.out.println("Enter Number: ");
		int inp = in.nextInt();

		if(inp == num[0]){
			System.out.println("one");
		}	
		else if(inp == num[1]){
			System.out.println("two");
		}
		else if(inp == num[2]){
			System.out.println("three");
		}
		else if(inp == num[3]){
			System.out.println("four");
		}
		else if(inp == num[4]){
			System.out.println("five");
		}
		else if(inp == num[5]){
			System.out.println("six");
		}
		else if(inp == num[6]){
			System.out.println("seven");
		}
		else if(inp == num[7]){
			System.out.println("eight");
		}
		else if(inp == num[8]){
			System.out.println("nine");
		}
		else if(inp == num[9]){
			System.out.println("ten");
		}

		else{
			System.out.println("Invalid Number");
		}


	}
}