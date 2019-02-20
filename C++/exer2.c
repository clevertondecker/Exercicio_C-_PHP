#include <fstream>
#include <iostream>
#include <string>

using namespace std;

int main () {

  string line, line2;
  string temp = "O_Teste_22";
  string str2 = "Teste";

ifstream myfile ("/tmp/exercicio.txt"); // ifstream = padrão ios:in

  if (myfile.is_open() )
  {
    while (! myfile.eof() ) //enquanto end of file for false continua
    {
      getline (myfile,line);
      //line2 += line;

        if (line.find(str2)==string::npos && line != "\0" && line.find(temp)==string::npos)  {
             //line2 = line;
             cout  << line << endl;
            

            ofstream newfile;
            newfile.open ("/home/novo.txt" , ofstream::app);
            newfile << line << "\n";
            newfile.close();
        }
   }
    myfile.close();

  }
  else cout << "Unable to open file";

  return 0;
}


