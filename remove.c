/*

Given a string, remove all spaces from the string and return it.

Input:  "g  eeks   for ge  eeks  "
Output: "geeksforgeeks"

Expected time complexity is O(n) and only one traversal of string.
*/

#include<stdio.h>
#include<string.h>

int main(){

	char a[]="g  eeks   for ge  eeks  ";
	int i,j;
	for(i=j=0;i<strlen(a);i++){
		if(a[i]!=' ') a[j++]=a[i]; 
	}
	a[j]='\0';
	printf("%s\n",a);
	return 0;
}
