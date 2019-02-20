#include <iostream>
#include  <stdlib.h>

using namespace std;

int main (int argc, char *argv[]){


    std::string localArq= argv[1];
    std::string linhas= argv[2];

    std::string command;
   
    command = "cat "+ localArq + " | tail" + " -" + argv[2];
  

    
     system((command).c_str());

    return 0;

}
