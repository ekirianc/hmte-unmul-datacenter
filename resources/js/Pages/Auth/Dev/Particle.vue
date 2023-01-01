<template>
    <Particles
        id="tsparticles"
        :options="options"
        :particlesInit="particlesInit"
    />
</template>

<script lang="ts">
import type { Engine } from "tsparticles-engine";
import { loadSlim } from "tsparticles-slim"; // loads tsparticles-slim
//import { loadFull } from "tsparticles"; // loads tsparticles

export default {
    data() {
        return {
            // using an empty options object will load the default options, which are static particles with no background and 3px radius, opacity 100%, white color
            // all options can be found here: https://particles.js.org/docs/interfaces/Options_Interfaces_IOptions.IOptions.html
            options: {
                "background": {
                    "color": {
                        "value": "#1c697f"
                    },
                    "image": "url('https://i.postimg.cc/rmKRgkC3/FZj-Jq-Ibak-AQoj-Hu.jpg')",
                    "position": "50% 50%",
                    "repeat": "no-repeat",
                    "size": "cover",
                    "opacity": 1
                },
                "backgroundMask": {
                    "composite": "destination-out",
                    "cover": {
                        "color": {
                            "value": {
                                "r": 252,
                                "g": 234,
                                "b": 240
                            }
                        },
                        "opacity": 1
                    },
                    "enable": true
                },
                "fullScreen": {
                    "enable": true,
                    "zIndex": 1
                },
                "detectRetina": true,
                "duration": 0,
                "fpsLimit": 120,
                "interactivity": {
                    "detectsOn": "window",
                    "events": {
                        "onDiv": {
                            "type": "circle"
                        },
                        "onHover": {
                            "enable": true,
                            "mode": "bubble",
                            "parallax": {
                                "force": 60,
                                "smooth": 10
                            }
                        },
                        "resize": {
                            "delay": 0.5,
                            "enable": true
                        }
                    },
                    "modes": {
                        "attract": {
                            "distance": 300,
                            "duration": 0.4,
                            "easing": "ease-out-quad",
                            "factor": 1,
                            "maxSpeed": 50,
                            "speed": 1
                        },
                        "bounce": {
                            "distance": 200
                        },
                        "bubble": {
                            "distance": 400,
                            "duration": 2,
                            "mix": false,
                            "opacity": 1,
                            "size": 100,
                            "divs": {
                                "distance": 200,
                                "duration": 0.4,
                                "mix": false,
                            }
                        },
                        "connect": {
                            "distance": 80,
                            "links": {
                                "opacity": 0.5
                            },
                            "radius": 60
                        },
                        "grab": {
                            "distance": 400,
                            "links": {
                                "blink": false,
                                "consent": false,
                                "opacity": 1
                            }
                        },
                        "push": {
                            "default": true,
                            "quantity": 4
                        },
                        "remove": {
                            "quantity": 2
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4,
                            "factor": 100,
                            "speed": 1,
                            "maxSpeed": 50,
                            "easing": "ease-out-quad",
                            "divs": {
                                "distance": 200,
                                "duration": 0.4,
                                "factor": 100,
                                "speed": 1,
                                "maxSpeed": 50,
                                "easing": "ease-out-quad",
                            }
                        },
                        "slow": {
                            "factor": 3,
                            "radius": 200
                        },
                        "trail": {
                            "delay": 1,
                            "pauseOnStop": false,
                            "quantity": 1
                        },
                        "light": {
                            "area": {
                                "gradient": {
                                    "start": {
                                        "value": "#ffffff"
                                    },
                                    "stop": {
                                        "value": "#000000"
                                    }
                                },
                                "radius": 1000
                            },
                            "shadow": {
                                "color": {
                                    "value": "#000000"
                                },
                                "length": 2000
                            }
                        }
                    }
                },
                "particles": {
                    "bounce": {
                        "horizontal": {
                            "random": {
                                "enable": false,
                                "minimumValue": 0.1
                            },
                            "value": 1
                        },
                        "vertical": {
                            "random": {
                                "enable": false,
                                "minimumValue": 0.1
                            },
                            "value": 1
                        }
                    },
                    "collisions": {
                        "absorb": {
                            "speed": 2
                        },
                        "bounce": {
                            "horizontal": {
                                "random": {
                                    "enable": false,
                                    "minimumValue": 0.1
                                },
                                "value": 1
                            },
                            "vertical": {
                                "random": {
                                    "enable": false,
                                    "minimumValue": 0.1
                                },
                                "value": 1
                            }
                        },
                        "enable": false,
                        "mode": "bounce",
                        "overlap": {
                            "enable": true,
                            "retries": 0
                        }
                    },
                    "color": {
                        "value": "#ffffff",
                        "animation": {
                            "h": {
                                "count": 0,
                                "enable": false,
                                "offset": 0,
                                "speed": 1,
                                "decay": 0,
                                "sync": true
                            },
                            "s": {
                                "count": 0,
                                "enable": false,
                                "offset": 0,
                                "speed": 1,
                                "decay": 0,
                                "sync": true
                            },
                            "l": {
                                "count": 0,
                                "enable": false,
                                "offset": 0,
                                "speed": 1,
                                "decay": 0,
                                "sync": true
                            }
                        }
                    },
                    "move": {
                        "angle": {
                            "offset": 0,
                            "value": 90
                        },
                        "attract": {
                            "distance": 200,
                            "enable": false,
                            "rotate": {
                                "x": 600,
                                "y": 1200
                            }
                        },
                        "center": {
                            "x": 50,
                            "y": 50,
                            "mode": "percent",
                            "radius": 0
                        },
                        "decay": 0,
                        "direction": "none",
                        "drift": 0,
                        "enable": true,
                        "gravity": {
                            "acceleration": 9.81,
                            "enable": false,
                            "inverse": false,
                            "maxSpeed": 50
                        },
                        "path": {
                            "clamp": true,
                            "delay": {
                                "random": {
                                    "enable": false,
                                    "minimumValue": 0
                                },
                                "value": 0
                            },
                            "enable": false,
                        },
                        "outModes": {
                            "default": "out",
                            "bottom": "out",
                            "left": "out",
                            "right": "out",
                            "top": "out"
                        },
                        "random": false,
                        "size": false,
                        "speed": 2,
                        "spin": {
                            "acceleration": 0,
                            "enable": false
                        },
                        "straight": false,
                        "trail": {
                            "enable": false,
                            "length": 10,
                            "fillColor": {
                                "value": "#000000"
                            }
                        },
                        "vibrate": false,
                        "warp": false
                    },
                    "number": {
                        "density": {
                            "enable": true,
                            "area": 800,
                            "factor": 1000
                        },
                        "limit": 0,
                        "value": 80
                    },
                    "opacity": {
                        "random": {
                            "enable": false,
                            "minimumValue": 0.1
                        },
                        "value": 1,
                        "animation": {
                            "count": 0,
                            "enable": false,
                            "speed": 1,
                            "decay": 0,
                            "sync": false,
                            "destroy": "none",
                            "startValue": "random",
                            "minimumValue": 0.1
                        }
                    },
                    "reduceDuplicates": false,
                    "shadow": {
                        "blur": 0,
                        "color": {
                            "value": "#000"
                        },
                        "enable": false,
                        "offset": {
                            "x": 0,
                            "y": 0
                        }
                    },
                    "shape": {
                        "type": "circle"
                    },
                    "size": {
                        "random": {
                            "enable": true,
                            "minimumValue": 1
                        },
                        "value": {
                            "min": 1,
                            "max": 30
                        },
                        "animation": {
                            "count": 0,
                            "enable": false,
                            "speed": 40,
                            "decay": 0,
                            "sync": false,
                            "destroy": "none",
                            "startValue": "random",
                            "minimumValue": 0.1
                        }
                    },
                    "stroke": {
                        "width": 0
                    },
                    "zIndex": {
                        "random": {
                            "enable": false,
                            "minimumValue": 0
                        },
                        "value": 0,
                        "opacityRate": 1,
                        "sizeRate": 1,
                        "velocityRate": 1
                    },
                    "life": {
                        "count": 0,
                        "delay": {
                            "random": {
                                "enable": false,
                                "minimumValue": 0
                            },
                            "value": 0,
                            "sync": false
                        },
                        "duration": {
                            "random": {
                                "enable": false,
                                "minimumValue": 0.0001
                            },
                            "value": 0,
                            "sync": false
                        }
                    },
                    "rotate": {
                        "random": {
                            "enable": false,
                            "minimumValue": 0
                        },
                        "value": 0,
                        "animation": {
                            "enable": false,
                            "speed": 0,
                            "decay": 0,
                            "sync": false
                        },
                        "direction": "clockwise",
                    },
                    "roll": {
                        "mode": "vertical",
                        "speed": 25
                    },
                    "tilt": {
                        "random": {
                            "enable": false,
                            "minimumValue": 0
                        },
                        "value": 0,
                        "animation": {
                            "enable": false,
                            "sync": false
                        },
                        "direction": "clockwise",
                        "enable": false
                    },
                    "twinkle": {
                        "lines": {
                            "enable": false,
                            "frequency": 0.05,
                            "opacity": 1
                        },
                        "particles": {
                            "enable": false,
                            "frequency": 0.05,
                            "opacity": 1
                        }
                    },
                    "wobble": {
                        "distance": 5,
                        "enable": false,
                        "speed": {
                            "angle": 50,
                            "move": 10
                        }
                    },
                    "links": {
                        "blink": false,
                        "color": {
                            "value": "#fff"
                        },
                        "consent": false,
                        "distance": 100,
                        "enable": false,
                        "frequency": 1,
                        "opacity": 1,
                        "shadow": {
                            "blur": 5,
                            "color": {
                                "value": "#000"
                            },
                            "enable": false
                        },
                        "triangles": {
                            "enable": false,
                            "frequency": 1
                        },
                        "width": 1,
                        "warp": false
                    },
                },
                "pauseOnBlur": true,
                "pauseOnOutsideViewport": true,
                "smooth": false,
                "zLayers": 100
            },
        };
    },
    methods: {
        async particlesInit(engine: Engine) {
            await loadSlim(engine);
            // await loadFull(engine); // for this sample the slim version is enough, choose whatever you prefer, slim is smaller in size but doesn't have all the plugins and the mouse trail feature
        },
    },
};
</script>

<style scoped>

</style>
