
const  _privateCoordenadas = new WeakMap();

class Coordenadas {
    constructor(latitud, longitud) {

        const properties = {
            latitud: latitud,
            longitud: longitud
        }

        _privateCoordenadas.set(this, {properties});

    }

    get getLatitud() {
        return _privateCoordenadas.get(this).properties['latitud'];
    }

    set setLatitud(latitud) {
        return _privateCoordenadas.get(this).properties['latitud'] = latitud;
    }

    get getLongitud() {
        return _privateCoordenadas.get(this).properties['longitud'];
    }

    set setLongitud(longitud) {
        return _privateCoordenadas.get(this).properties['longitud'] = longitud;
    }

    
}
