#include <iostream>
#include <fstream> 

using namespace std;


int main() {

ofstream makefile;

makefile.open("/tmp/exercicio.txt");
makefile << "Teste1\n";
makefile << "Nome\n";
makefile << "Teste11\n";
makefile << "Frase_teste\n";
makefile << "O_Teste_22\n";
makefile << "XXavg12\n";
makefile << "54ggg|_aa\n";
makefile << "Teste13\n";
makefile << "Xicara\n";
makefile << "Desenvolvedor\n";
makefile << "Teste15\n";
makefile << "Software\n";
makefile << "Bicicleta\n";
makefile << "Teste100\n";


makefile.close();
  
}

