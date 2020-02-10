import Foundation

struct Printer<T> {
	/**
	*    Name: printArray
	*    imprimir cada elemento da array genérica em nova linha, não retornar nada
	*    @param A generic array
	**/
	
	// 
    func printArray<Element>(array: [Element]) {
        for element in array {
            print(element)
        }
    }
    
}


var n = Int(readLine()!)!
var intArray = Array(repeating: 0, count: n);
for i in 0...n - 1 {
	intArray[i] = Int(readLine()!)!;
}

n = Int(readLine()!)!
var stringArray = Array(repeating: "", count: n);
for i in 0...n - 1 {
	stringArray[i] = readLine()!;
}

Printer<Int>().printArray(array: intArray)
Printer<String>().printArray(array: stringArray)