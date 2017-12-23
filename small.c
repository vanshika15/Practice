/*Find the smallest window in a string containing all characters of another string
Given two strings string1 and string2, find the smallest substring in string1 containing all characters of string2 efficiently.
For Example:

Input :  string = "this is a test string"
         pattern = "tist"
Output :  Minimum window is "t stri"
Explanation: "t stri" contains all the characters
              of pattern.

Input :  string = "geeksforgeeks"
         pattern = "ork" 
Output :  Minimum window is "ksfor"
*/

#include<stdio.h>
#include<string.h>
#include<stdlib.h>


int main(){
	char a[]="this is a test string";
	char b[]="tist";
	int hash[strlen(a)]={0},i,j=0,count=0;
	int min=INT_MAX;
	for(i=0;i<strlen(a);i++){
		is_check(a[i],b,hash,&count,pos);
		if(count==strlen(b)){
			if(max<i-
					
		}
		
	}
	return 0;
}
