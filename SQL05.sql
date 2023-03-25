SELECT * FROM tnilai as a
JOIN tmatakuliah as b on a.KodeMK = b.KodeMK
WHERE a.Grade BETWEEN 55 and 79