#include<iostream>
using namespace std;
int main()
{
int a = 10;
do
{
	if(a==15)
	{
	//a=a+1;
	cout<<"Value of a :"<<a<<endl;
	a=a+1;
	continue;
	//a=a+1;
	}
	cout<<"Value of a: "<<a<<endl;
	a=a+1;
}while(a<20);
cout<<"Good byee"<<endl;
}
