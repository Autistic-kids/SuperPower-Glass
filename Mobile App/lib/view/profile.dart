import 'package:flutter/services.dart' show rootBundle;
import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:firebase_storage/firebase_storage.dart';
import 'package:flutter/foundation.dart';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/Reposiories/Model/sensor.dart';
import 'package:kids/provider.dart';
import 'package:kids/view/Login_S.dart';
import 'package:provider/provider.dart';
import 'package:shared_preferences/shared_preferences.dart';

class Profile extends StatefulWidget {
  const Profile({Key? key}) : super(key: key);

  @override
  State<Profile> createState() => _ProfileState();
}

class _ProfileState extends State<Profile> {
  TextStyle headerStyle = const TextStyle(fontSize: 15, color: Colors.blue, fontWeight: FontWeight.w400);
  TextStyle normalTextStyle = const TextStyle(fontSize: 18, fontWeight: FontWeight.w400, color: Colors.black);
  String name = "";
  String phone = "";
  String email = "";
  String password = "";
  bool editMode = false;
  TextEditingController nameController = TextEditingController();
  TextEditingController phoneController = TextEditingController();
  TextEditingController emailController = TextEditingController();
  TextEditingController passwordController = TextEditingController();
  TextEditingController newPasswordController = TextEditingController();
  final formGlobalKey = GlobalKey<FormState>();
  Uint8List imageBytes = Uint8List(0);

  @override
  void initState() {
    readUserData();
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Builder(builder: (context) {
        return drawerLables(context, activeIndex);
      }),
      // floatingActionButton edit button
      floatingActionButton: FloatingActionButton(
        onPressed: editMode
            ? () {
                if (formGlobalKey.currentState!.validate()) {
                  updateUserData();
                }
              }
            : () {
                setState(() {
                  editMode = !editMode;
                });
              },
        child: Icon(editMode ? Icons.done : Icons.edit),
      ),
      body: editMode
          ? buildForm()
          : UserData(
              headerStyle: headerStyle, name: name, normalTextStyle: normalTextStyle, email: email, phone: phone, imageBytes: imageBytes),
    );
  }

  SingleChildScrollView buildForm() {
    return SingleChildScrollView(
      child: Form(
        key: formGlobalKey,
        child: Column(
          children: [
            Center(
              child: Container(
                width: MediaQuery.of(context).size.width,
                height: MediaQuery.of(context).size.height * 0.4,
                padding: const EdgeInsets.only(top: 25),
                decoration: const BoxDecoration(
                  color: Color(0xFF36429E),
                  borderRadius: BorderRadius.only(
                    bottomRight: Radius.circular(30),
                    bottomLeft: Radius.circular(30),
                  ),
                ),
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                  children: [
                    const Hero(
                      tag: "ServantName",
                      child: Text(
                        "Profile",
                        style: TextStyle(fontWeight: FontWeight.w700, fontSize: 25, color: Colors.white),
                      ),
                    ),
                    Stack(alignment: Alignment.bottomRight, children: [
                      Container(
                        decoration: BoxDecoration(borderRadius: BorderRadius.circular(100), color: Colors.white),
                        child: CircleAvatar(
                          radius: 60,
                          backgroundImage: Image.memory(imageBytes).image,
                        ),
                      ),
                      FloatingActionButton(
                          onPressed: () async {
                            final ImagePicker _picker = ImagePicker();
                            // Pick an image
                            final XFile? image = await _picker.pickImage(source: ImageSource.gallery);
                            if (image != null) {
                              imageBytes = await image.readAsBytes();
                              setState(() {});
                            }
                          },
                          backgroundColor: Colors.white,
                          child: const Icon(Icons.edit, color: Color(0xFF36429E))),
                    ]),
                  ],
                ),
              ),
            ),
            SizedBox(
              height: MediaQuery.of(context).size.height * 0.02,
            ),
            Padding(
              padding: const EdgeInsets.all(12.0),
              child: Column(
                children: [
                  const SizedBox(
                    height: 20,
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  TextFormField(
                    controller: nameController,
                    decoration: const InputDecoration(
                      border: OutlineInputBorder(),
                      labelText: "Name",
                    ),
                    validator: (value) {
                      if (value == null || value.isEmpty) {
                        return "Please enter your name";
                      }
                      return null;
                    },
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  TextFormField(
                    controller: phoneController,
                    decoration: const InputDecoration(
                      border: OutlineInputBorder(),
                      labelText: "Phone",
                    ),
                    validator: (value) {
                      if (value == null || value.isEmpty) {
                        return "Please enter your phone";
                      } else if (value.length != 11) {
                        return "Please enter a valid phone";
                      }
                      return null;
                    },
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  TextFormField(
                    controller: emailController,
                    decoration: const InputDecoration(
                      border: OutlineInputBorder(),
                      labelText: "Email",
                    ),
                    validator: (value) {
                      if (value == null || value.isEmpty) {
                        return "Please enter your email";
                      } else if (!value.contains("@") || !value.contains(".")) {
                        return "Please enter a valid email";
                      }
                      return null;
                    },
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  // old password
                  TextFormField(
                    obscureText: true,
                    controller: passwordController,
                    decoration: const InputDecoration(
                      border: OutlineInputBorder(),
                      labelText: "Old Password",
                    ),
                    validator: (value) {
                      if (value == null || value.isEmpty) {
                        return null;
                      } else if (value != password) {
                        return "Password is incorrect";
                      }
                      return null;
                    },
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  // new password
                  TextFormField(
                    obscureText: true,
                    controller: newPasswordController,
                    decoration: const InputDecoration(
                      border: OutlineInputBorder(),
                      labelText: "New Password",
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
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
                    Provider.of<HomePageProvider>(context, listen: false).notifyListeners();
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
                    Provider.of<HomePageProvider>(context, listen: false).notifyListeners();
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
                    Provider.of<HomePageProvider>(context, listen: false).notifyListeners();
                    Scaffold.of(context).closeDrawer();
                  },
            selected: index == 2 ? true : false,
          ),
        ],
      ),
    );
  }

  Future readUserData() async {
    // read the sensors from the firestore database
    var data = await FirebaseFirestore.instance.collection("users data").doc(activeUserID).get();
    var userdata = data.data();
    name = userdata!["full name"];
    phone = userdata["phone"];
    email = userdata["email"];
    password = userdata["password"];
    nameController.text = name;
    phoneController.text = phone;
    emailController.text = email;
    // get the image from the firebase storage that named with the user id and set it to the image variable
    final gsReference = FirebaseStorage.instance.refFromURL("gs://{{API-KEY}}/$activeUserID.jpg");
    try {
      imageBytes = (await gsReference.getData())!;
    } catch (e) {
      imageBytes = await rootBundle.load("images/logo.jpeg").then((value) => value.buffer.asUint8List());
    }
    setState(() {});
  }

  Future<void> updateUserData() async {
    FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
      "full name": nameController.text,
      "phone": phoneController.text,
      "email": emailController.text,
    });
    await FirebaseAuth.instance.currentUser!.updateEmail(emailController.text);
    editMode = !editMode;
    // update the image in the firebase storage that named with the user id
    final gsReference = FirebaseStorage.instance.refFromURL("gs://{{API-KEY}}/$activeUserID.jpg");
    await gsReference.putData(imageBytes);
    if (passwordController.text.isNotEmpty) {
      await FirebaseAuth.instance.signInWithEmailAndPassword(email: emailController.text, password: passwordController.text);
      await FirebaseAuth.instance.currentUser!.updatePassword(newPasswordController.text);
      FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
        "password": newPasswordController.text,
      });
      password = newPasswordController.text;
      passwordController.clear();
      newPasswordController.clear();
    }
    setState(() {
      name = nameController.text;
      phone = phoneController.text;
      email = emailController.text;
    });
  }
}

class UserData extends StatelessWidget {
  const UserData({
    super.key,
    required this.headerStyle,
    required this.name,
    required this.normalTextStyle,
    required this.email,
    required this.phone,
    required this.imageBytes,
  });

  final TextStyle headerStyle;
  final String name;
  final TextStyle normalTextStyle;
  final String email;
  final String phone;
  final Uint8List imageBytes;

  @override
  Widget build(BuildContext context) {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Center(
          child: Container(
            width: MediaQuery.of(context).size.width,
            height: MediaQuery.of(context).size.height * 0.4,
            padding: const EdgeInsets.only(top: 25),
            decoration: const BoxDecoration(
              color: Color(0xFF36429E),
              borderRadius: BorderRadius.only(
                bottomRight: Radius.circular(30),
                bottomLeft: Radius.circular(30),
              ),
            ),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.spaceEvenly,
              children: [
                const Hero(
                  tag: "ServantName",
                  child: Text(
                    "Profile",
                    style: TextStyle(fontWeight: FontWeight.w700, fontSize: 25, color: Colors.white),
                  ),
                ),
                Container(
                  decoration: BoxDecoration(borderRadius: BorderRadius.circular(100), color: Colors.white),
                  child: CircleAvatar(
                    radius: 60,
                    backgroundImage: Image.memory(imageBytes).image,
                  ),
                ),
              ],
            ),
          ),
        ),
        SizedBox(
          height: MediaQuery.of(context).size.height * 0.02,
        ),
        Text(
          "   Name:",
          style: headerStyle,
        ),
        Text(
          "       $name",
          style: normalTextStyle,
        ),
        Center(
          child: Container(
            height: 1,
            width: MediaQuery.of(context).size.width * 0.9,
            color: Colors.grey,
            margin: const EdgeInsets.symmetric(vertical: 5),
          ),
        ),
        Text(
          "   Email:",
          style: headerStyle,
        ),
        Text(
          "       $email",
          style: normalTextStyle,
        ),
        Center(
          child: Container(
            height: 1,
            width: MediaQuery.of(context).size.width * 0.9,
            color: Colors.grey,
            margin: const EdgeInsets.symmetric(vertical: 5),
          ),
        ),
        Text(
          "   Phone:",
          style: headerStyle,
        ),
        Text(
          "       $phone",
          style: normalTextStyle,
        ),
        Center(
          child: Container(
            height: 1,
            width: MediaQuery.of(context).size.width * 0.9,
            color: Colors.grey,
            margin: const EdgeInsets.symmetric(vertical: 5),
          ),
        ),
        SizedBox(
          height: MediaQuery.of(context).size.height * 0.04,
        ),
        Center(
          child: SizedBox(
            width: MediaQuery.of(context).size.width * 0.8,
            child: ElevatedButton(
              onPressed: () async {
                sensors = [
                  // Falling Sensor
                  Sensor(
                    id: 1,
                    name: "Fall Detector",
                    description: "FallDetector",
                    unit: "",
                    value: "--",
                    icon: Image.asset(
                      "images/1.png",
                      fit: BoxFit.contain,
                    ),
                  ),

                  // mood Sensor
                  Sensor(
                    id: 2,
                    name: "StressRate",
                    description: "StressRate",
                    unit: "",
                    value: "--",
                    icon: Image.asset(
                      "images/2.png",
                      fit: BoxFit.contain,
                    ),
                  ),

                  // Respirations Sensor
                  Sensor(
                    id: 3,
                    name: "RespirationRate",
                    description: "RespirationRate",
                    unit: "",
                    value: "--",
                    icon: Image.asset(
                      "images/3.png",
                      fit: BoxFit.contain,
                    ),
                  ),

                  // Heart Rate Sensor
                  Sensor(
                    id: 4,
                    name: "Heart Rate",
                    description: "HeartRate",
                    unit: "",
                    value: "--",
                    icon: Image.asset(
                      "images/4.png",
                      fit: BoxFit.contain,
                    ),
                  ),

                  // temperature Sensor
                  Sensor(
                    id: 5,
                    name: "Temperature",
                    description: "Temperature",
                    unit: "°C",
                    value: "--",
                    icon: Image.asset(
                      "images/5.png",
                      fit: BoxFit.contain,
                    ),
                  ),
                  // Muscle Activity Sensor
                  Sensor(
                    id: 6,
                    name: "Muscle Activity",
                    description: "MuscleActivity",
                    unit: "",
                    value: "--",
                    icon: Image.asset(
                      "images/6.png",
                      fit: BoxFit.contain,
                    ),
                  ),
                ];
                // remove shared preferences
                SharedPreferences prefs = await SharedPreferences.getInstance();
                prefs.remove("ID");
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => const LoginS()),
                );
              },
              style: ElevatedButton.styleFrom(
                backgroundColor: Colors.red,
              ),
              child: const Text(
                "Logout",
                style: TextStyle(color: Colors.white, fontSize: 20),
              ),
            ),
          ),
        ),
      ],
    );
  }
}
