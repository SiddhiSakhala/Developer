//Bitwise operator
#include<iostream>
using namespace std;
int main()
{
	int a = 60;	//60 = 0011 1100
	int b = 13;	//13 = 0000y 1101
	int c;

	c = a & b;	//12 = 0000 1100
	cout<<"a & b = "<<c<<endl;

	c = a|b;	//61 = 0011 1101
	cout<<"a | b = "<<c<<endl;

	c = a ^ b;	//49 = 0011 0001
	cout<<"a ^ b = "<<c<<endl;

	c = ~a;		//-61 = 110 0011
	cout<<"~a = "<<c<<endl;

	c = a<<2;	//240 = 1111 0000
	cout<<"a << 2 = "<<c<<endl;

	c = a>>2;	//15 = 0000 1111
	cout<<"a >> 2 = "<<c<<endl;
}
