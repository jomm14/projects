import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.*;
public class BufferedReaderDemo {

public static void main(String[] args){
BufferedReader dataIn = new BufferedReader(new InputStreamReader(System.in));
String word1="";
String word2="";
String word3="";

try{
System.out.print("Enter first word: ");
word1= dataIn.readLine();

System.out.print("Enter second word: ");
word2= dataIn.readLine();

System.out.print("Enter third word: ");
word3= dataIn.readLine();

}
catch(IOException e){
System.out.println("Error.");
}

System.out.println("\n"+word1+" "+word2+" "+word3+".");
}
}