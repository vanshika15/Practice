/*
K’th Non-repeating Character
2.7
Given a string and a number k, find the k’th non-repeating character in the string. Consider a large input string with lacs of characters and a small character set. How to find the character by only doing only one traversal of input string?

*/

#include<stdio.h>
#include<string.h>

int compare(const void * a, const void * b)
{
    return ( *(int*)a - *(int*)b );
}

int main(){

	char a[100];
	int i,count[265],length[256],k,max_char=-1;
	printf("enter the string\n");
	fgets(a,100,stdin);
	printf("enter the value of k\n");
	scanf("%d",&k);
	
	for(i=0;i<256;i++){
		count[i]=0;
		length[i]=strlen(a);
	}
	for(i=0;i<strlen(a);i++){
		count[a[i]]++;
		if(count[a[i]]==1)
			length[a[i]]=i;
		else if(count[a[i]]==2)
			length[a[i]]=strlen(a);
	
		}
	qsort(length,256,sizeof(int),compare);

	for(i=0;i<256;i++)
		printf("%d ", length[i]);
	printf("============\n");
	max_char=(length[k-1]!=strlen(a)) ? length[k-1] : -1;  
	if(max_char !=-1)
	printf("ans=%c\n",a[max_char]);
	else
	printf("no output");
	return 0;
}
