
const  _privateOrigen = new WeakMap();

class Origen {
    constructor(lat, long, horaSalida) {

        const properties = {
            coordenadas: new Coordenadas(lat, long),
            horaSalida: horaSalida
        }

        _privateOrigen.set(this, {properties});

    }

    get getCoordenadas() {
        return _privateOrigen.get(this).properties['coordenadas'];
    }

    set setCoordenadas(coordenadas) {
        return _privateOrigen.get(this).properties['coordenadas'] = coordenadas;
    }

    get getHoraSalida() {
        return _privateOrigen.get(this).properties['horaSalida'];
    }

    set setHoraSalida(horaSalida) {
        return _privateOrigen.get(this).properties['horaSalida'] = horaSalida;
    }

}
