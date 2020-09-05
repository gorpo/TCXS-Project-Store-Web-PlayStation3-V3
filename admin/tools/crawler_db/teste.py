



for i in range(30):


    texto = """if ($row['link'] != "---") {
        echo " <a href='javascript:#tcxsproject'". 'onclick="location.href='."'".$row['link']."'".'"'.'>'.$row['titulo'].' | Parte</a>';
        }
        """
    texto = texto.replace('link',f'link{i+1}')
    texto = texto.replace('Parte',f'Parte {i+1}')



    print(texto)
