/*
Write an efficient C function to return maximum occurring character in the input string e.g., if input string is “test” then function should return ‘t’.

*/
#include<stdio.h>
#include<string.h>

int main(){

	char a[100],max_char;
	int i,count[265]={0},max=-1;
	fgets(a,100,stdin);
	for(i=0;i<strlen(a);i++)
		count[a[i]]++;

	for(i=0;i<265;i++)
		if(count[i] > max){
			max=count[i];
			max_char=i;
			}
	printf("ans=%c",max_char);
	return 0;
}
