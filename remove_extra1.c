/*using _hashing*/

#include<stdio.h>
#include<string.h>
#define NO_CHARS 256

int main(){

	char a[]="test string";
	char flag[256]={0};
	int i,j=0;
	
	for(i=0;i<strlen(a);){
		if(flag[a[i]]==0){ flag[a[i]]=1; a[j++]=a[i];}
		else{
		
		i++;
		}
	}

	a[j]='\0';
	printf("%s",a);
	return 0;
}
