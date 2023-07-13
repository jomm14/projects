import java.util.Scanner;
public class FLoop{
	 public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		String inp = " ";
		System.out.println("Enter Your Name: ");
		inp = in.nextLine();

		for(int i=0; i<100; i++){
			System.out.println(inp);
		}



	}
}