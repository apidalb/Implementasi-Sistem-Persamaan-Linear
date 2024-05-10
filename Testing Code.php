$matrixA = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$matrixB = [10, 11, 12];

// Testing metode matriks balikan
$resultInverse = inverseMatrixMethod($matrixA, $matrixB);
echo "Hasil menggunakan metode matriks balikan: ";
print_r($resultInverse);

// Testing metode dekomposisi LU Gauss
$resultLU_Gauss = luDecompositionGauss($matrixA, $matrixB);
echo "Hasil menggunakan metode dekomposisi LU Gauss: ";
print_r($resultLU_Gauss);

// Testing metode dekomposisi Crout
$resultLU_Crout = luDecompositionCrout($matrixA, $matrixB);
echo "Hasil menggunakan metode dekomposisi Crout: ";
print_r($resultLU_Crout);