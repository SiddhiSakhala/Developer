#include<iostream>
using namespace std;
int main()
{
int a=10;
int b=5;
int c;
int ch=2;
switch(ch)
{
	case 1 :
		{
		c=a+b;
		cout<<"Addition = "<<c<<endl;
		break;
		}
	case 2:
		{
		c=a-b;
		cout<<"Sub = "<<c<<endl;
		break;
}
	case 3: 
		{
		c=a*b;
		cout<<"Multi = "<<c<<endl;
		break;
}
	case 4:
	{
		c=a/b;
		cout<<"Div = "<<c<<endl;
		break;
	}
	default:
		{
		cout<<"Invalid"<<endl;
		}



}




}
