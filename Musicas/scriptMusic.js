var song = new Audio()

function playSound(value){
    let banda = value

    switch (banda){
        case 1:
            song.src = './audios/1.mp3'
            break

        case 2:
            song.src =  './audios/2.mp3'
            break

        case 3: 
            song.src =  './audios/3.mp3'
            break

        case 4:
            song.src =  './audios/4.mp3'
            break
        default:
            alert("Esta musica não está disponivel no banco de audios")
    }

    song.play()
}

