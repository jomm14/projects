import java.util.*;
import javax.swing.JOptionPane;
public class gradeJOP{
	public static void main(String [] args){
		 int number1, number2, number3, average;
		number1 = Integer.parseInt(JOptionPane.showInputDialog(null, "Enter Grade: "));
		number2 = Integer.parseInt(JOptionPane.showInputDialog(null, "Enter Grade: "));
		number3 = Integer.parseInt(JOptionPane.showInputDialog(null, "Enter Grade: "));
		average = (number1 + number2 + number3)/3;
		
		JOptionPane.showMessageDialog(null,number1+"\n"+number2+"\n"+number3+"\n \n"+average);

		if(average >= 60){
                JOptionPane.showMessageDialog(null, " :) ");
            }
            else{
                JOptionPane.showMessageDialog(null," :( ");
            }
	}
}