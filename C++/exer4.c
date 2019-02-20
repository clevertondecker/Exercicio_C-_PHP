#include <dirent.h>
#include <errno.h>
#include <iostream>
#include <iostream>
#include  <stdlib.h>

using namespace std;

int main(int argc, char *argv[])
{
	
const char* temp = argv[1];

DIR* dir = opendir(temp);

if (dir)
{
    cout << "Existe";
    closedir(dir);
}
else if (ENOENT == errno)
{
    cout << "Não Existe";
}
else
{
    cout << "N2ão Existe";
}


	return 0;
}