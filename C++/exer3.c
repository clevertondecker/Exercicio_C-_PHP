#include <stdio.h>
#include <string>
#include <stdlib.h>
#include <fstream>
#include <iostream>

using namespace std;

int main(int argc, char *argv[] )
{

char* local = argv[1];

  cout << local;


  FILE *find = fopen(local, "r");
  

  if (!find)
    printf("Arquivo não existe");
	else {
	printf("Existe");
		}
		
  return 0;

}
