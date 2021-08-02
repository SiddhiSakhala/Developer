#include<iostream>
using namespace std;
int main()
{
	int a = 5;
	int b = 20;
	if ((a<b) && (a==b))
	{
	cout<<"True"<<endl;
	}
	else
	{
	cout<<"False"<<endl;
	}
	if((a<b) || (a==b))
	{
	cout<<"True"<< endl;
	}
	else
	{
	cout<<"False"<<endl;
	}
	if(!(a<b) && (a==b))
	{
	cout<<"True"<<endl;
	}
	else
	{
	cout<<"False"<<endl;
	}
	if(!(a<b) || (a==b))
	{
	cout<<"True"<<endl;
	}
	else
	{
	cout<<"False"<<endl;
	}
	return 0;
}
