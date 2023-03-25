SELECT a.NamaMahasiswa,c.NamaMataKuliah,b.Grade FROM tmahasiswa as a
LEFT JOIN tnilai as b on a.NIRM = b.NIRM
LEFT JOIN tmatakuliah as c on b.KodeMK = c.KodeMK