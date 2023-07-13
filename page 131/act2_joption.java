import java.util.*;
import javax.swing.JOptionPane;
public class act2_joption{
	public static void main(String[] args) {
		// declare variable
		String word1, word2, word3, alltogether;
		//input
		word1 = JOptionPane.showInputDialog("Enter word 1 ");
		word2 = JOptionPane.showInputDialog("Enter word 2 ");
		word3 = JOptionPane.showInputDialog("Enter word 3 ");
		//all together
		alltogether = word1+" "+word2+" "+word3;
		//output
		JOptionPane.showMessageDialog(null,alltogether);
	}
}