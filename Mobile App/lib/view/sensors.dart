import 'dart:async';
import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/provider.dart';
import 'package:provider/provider.dart';


class Sensors extends StatefulWidget {
  const Sensors({Key? key}) : super(key: key);

  @override
  State<Sensors> createState() => _SensorsState();
}

class _SensorsState extends State<Sensors> {
  late Timer _timer;
  @override
  void initState() {
    // creating a timer to update the data every 1 seconds
    _timer = Timer.periodic(const Duration(seconds: 1), (timer) async {
      await readSensors();
      setState(() {});
    });
    super.initState();
  }
  @override
  void dispose() {
    _timer.cancel();
    super.dispose();
  }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Builder(builder: (context) {
      return drawerLables(context, activeIndex);
    }),
      appBar: AppBar(
        title: const Text(
          "Sensors",
        ),
        centerTitle: true,
      ),
      // Grid view of the sensors
      body: Center(
        child: GridView.builder(
          shrinkWrap: true,
          padding: const EdgeInsets.all(10),
          gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
            crossAxisCount: 2,
            mainAxisSpacing: 20,
            crossAxisSpacing: 20,
          ),
          itemBuilder: (context, index) => Container(
            decoration: BoxDecoration(
              color: Colors.grey.shade300,
              borderRadius: BorderRadius.circular(20),
            ),
              child: Center(
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                  children: [
                    SizedBox(width: 75,height: 75,child: sensors[index].icon),
                    Text(sensors[index].name,style: const TextStyle(fontSize: 20,color: Colors.blue),),
                    Text("${sensors[index].value} ${sensors[index].unit}"),
                  ],
                ),
              )),
          itemCount: sensors.length,
        ),
      ),
    );
  }
  // read the sensors from the firestore database
  Future readSensors() async {
    // read the sensors from the firestore database
    var doc = FirebaseFirestore.instance.collection("users data").doc(activeUserID);
    var data = await doc.get();
    var userdata = data.data();
    var sensorsData = userdata!["sensordata"];
    // update the sensors values
    for (int i = 0; i < sensors.length; i++) {
      sensors[i].value = sensorsData[sensors[i].description];
    }
  }

  Widget drawerLables(BuildContext context, int index) {
    return Container(
      width: 300,
      height: MediaQuery.of(context).size.height,
      color: Colors.white,
      padding: const EdgeInsets.all(20),
      child: Column(
        children: [
          Image.asset("images/logo.png"),
          const SizedBox(
            height: 50,
          ),
          ListTile(
            title: const Text("Sensors"),
            leading: const Icon(Icons.sensors),
            onTap: index == 0
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 0;
              if (kDebugMode) {
                print(index);
              }
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
              Scaffold.of(context).closeDrawer();
            },
            selected: index == 0 ? true : false,
          ),
          ListTile(
            title: const Text("Educational"),
            leading: const Icon(Icons.ondemand_video),
            onTap: index == 1
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 1;
              if (kDebugMode) {
                print(index);
              }
              Scaffold.of(context).closeDrawer();
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
            },
            selected: index == 1 ? true : false,
          ),
          ListTile(
            title: const Text("Profile"),
            leading: const Icon(Icons.person),
            onTap: index == 2
                ? () {
              Scaffold.of(context).closeDrawer();
            }
                : () {
              activeIndex = 2;
              if (kDebugMode) {
                print(index);
              }
              Provider.of<HomePageProvider>(context,listen: false).notifyListeners();
              Scaffold.of(context).closeDrawer();
            },
            selected: index == 2 ? true : false,
          ),
        ],
      ),
    );
  }
}
