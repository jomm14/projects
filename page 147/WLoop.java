import java.util.Scanner;
public class WLoop{
	 public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		String inp = " ";
		int i = 0;
		System.out.println("Enter Your Name: ");
		inp = in.nextLine();

		while(i<100){
			System.out.println(inp);
			i++;
		}	

	}
}