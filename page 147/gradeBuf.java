import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
public class gradeBuf {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        BufferedReader in = new BufferedReader(new InputStreamReader(System.in));
        
        int number1, number2, number3, average;

        try{
            System.out.print("Enter Grade: ");
            number1 = Integer.parseInt(in.readLine());

            System.out.print("Enter Grade: ");
            number2 = Integer.parseInt(in.readLine());

            System.out.print("Enter Grade: ");
            number3 = Integer.parseInt(in.readLine());

            average = (number1 + number2 + number3)/3;
            
            System.out.println("Number 1 = "+number1);
            System.out.println("Number 2 = "+number2);
            System.out.println("Number 3 = "+number3);
            System.out.println("Average = "+average);
            System.out.println(" ");

            if(average >= 60){
                System.out.println(" :) ");
            }
            else{
                System.out.println(" :( ");
            }
        }

        catch(IOException e){
            System.out.println("Error.");
        }
    }
}
