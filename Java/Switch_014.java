class Switch_014{
	public static void main(String args[]){
		int a = 10;
		int b = 5;
		int c;
		String ch = "one";
		switch(ch)
		{
		case "one":
			c=a+b;
			System.out.println("Add = "+c);
			break;
		case "two":
			c=a-b;
			System.out.println("Sub = "+c);
			break;
		case "three":
			c=a*b;
			System.out.println("Multi = "+c);
			break;
		case "four":
			c=a/b;
			System.out.println("Div ="+c);
			break;
		default:
			System.out.println("Invalid");
}
}
}
