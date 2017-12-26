/*
Given a string, find the second most frequent character in it. Expected time complexity is O(n) where n is the length of the input string.
*/
#include<stdio.h>
#include<string.h>

int main(){

	char a[100];
	int i,count[265]={0},max=0,sec_max=0;
	fgets(a,100,stdin);
	
	for(i=0;i<strlen(a);i++)
		count[a[i]]++;

	
	for(i=0;i<265;i++){
		if(count[i] > count[max] && i >65){
			sec_max=max; 
			max=i;
			}
		else if ( count[i] <max && count[i] >sec_max){
			sec_max=i;
		}

	}


	printf("ans=%c",sec_max);
	return 0;
}
