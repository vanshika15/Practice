/*
Given a string of lowercase alphabets, count all possible substrings (not necessarily distinct) that has exactly k distinct characters.*/

#include<string.h>
#include<stdio.h>

int main(){
	
	char a[100];
	int count[26],i,j,ans=0,k,tt,fans=0;
	printf("enter string\n");
	fgets(a,100,stdin);
	printf("enter the value of k");
	scanf("%d",&k);
	
	for(i=0;i<strlen(a);i++){
		memset(count,0,sizeof(count)); ans=0;
		
		for(j=i;j<strlen(a)-1;j++){
			if(count[a[j]-'a']==0)
				ans++;
			count[a[j]-'a']++;
			if(ans==k){ printf("%c %c \n",a[i],a[j]);		
				fans++;
				}
		}
	}
	printf("ans = %d \n",fans);
	return 0;
}
