
const  _privateDestino = new WeakMap();

class Destino {
    constructor(lat, long, horaLlegada) {

        const properties = {
            coordenadas: new Coordenadas(lat, long),
            horaSalida: horaLlegada
        }

        _privateDestino.set(this, {properties});

    }

    get getCoordenadas() {
        return _privateDestino.get(this).properties['coordenadas'];
    }

    set setCoordenadas(coordenadas) {
        return _privateDestino.get(this).properties['coordenadas'] = coordenadas;
    }

    get getHoraLlegada() {
        return _privateDestino.get(this).properties['horaLlegada'];
    }

    set setHoraLlegada(horaLlegada) {
        return _privateDestino.get(this).properties['horaLlegada'] = horaLlegada;
    }

}
