import java.util.*;
import java.io.IOException;
public class ArithmeticExceptionTest{
	public static void main(String[] args) {
		
        int a = 1, b = 1, c = 2, d = 3, e = 4, f = 5, g = 5, h = 4, i = 5, r = 10, s = 5;
        int t = 2, u = 3, v = 3, w = 4, x = 2, y=0;

       
        int result1 = (a/((b^c^d) - e)+f) - (g*h) + i;
        int result2 =((3*10*2)/15) - (2 + (4^2^2));
        int result3 = r^((s*t)/u) - ( v + (w^x)) - (y++);
        
        
	 	System.out.println(result1);
	 	System.out.println(result2);
	 	System.out.println(result3);
	}
}