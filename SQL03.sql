SELECT * FROM tnilai as a
RIGHT JOIN tmatakuliah as b on a.KodeMK = b.KodeMK
WHERE a.NIRM IS NULL