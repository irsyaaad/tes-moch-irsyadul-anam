SELECT a.KodeMK, b.NamaMataKuliah, AVG(a.Grade) as rata FROM tnilai as a
JOIN tmatakuliah as b on a.KodeMK = b.KodeMK
GROUP BY KodeMK