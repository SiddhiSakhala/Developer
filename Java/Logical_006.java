class Logical_006
{
	public static void main(String args[])
	{
		int a = 5;
		int b = 20;
		if ((a<b)&&(a==b))
		System.out.println("True");
		else
		System.out.println("False");
		if ((a<b)||(a==b))
		System.out.println("True");
		else
		System.out.println("False");
		if (!(a<b)&&(a==b))
		System.out.println("True");
		else
		System.out.println("False");
		if (!(a<b)||(a==b))
		System.out.println("True");
		else
		System.out.println("False");
	}
}
