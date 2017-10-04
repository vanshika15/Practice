/*
Remove all duplicates from a given string
Below are the different methods to remove duplicates in a string.
*/

#include<stdio.h>
#include<string.h>
int main(){

	char a[]="eeeefggkkorss";
	int i,j;
	for(i=0,j=0;i<=strlen(a)-1;){
		if(a[i+1]!=a[i]) a[j++]=a[i++];
		else i++;
	}
	a[j]='\0';
	printf("%s\n",a);
	return 0;
}
