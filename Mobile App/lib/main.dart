import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/provider.dart';
import 'package:kids/view/Login_S.dart';
// ignore: depend_on_referenced_packages
import 'package:firebase_core/firebase_core.dart';
import 'package:kids/view/home_screen.dart';
import 'package:provider/provider.dart';
import 'package:shared_preferences/shared_preferences.dart';

void main() async{
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();
  // Obtain shared preferences.
  final SharedPreferences prefs = await SharedPreferences.getInstance();
  // ignore: non_constant_identifier_names
  String? ID = prefs.getString('ID');

  if( ID != null){
    activeUserID = ID;
  }
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MultiProvider(
        providers: [
        ChangeNotifierProvider(
        create: (_) => HomePageProvider(),
    ),
    ],
    child:MaterialApp(
      title: 'Kids',
      theme: ThemeData(
        primarySwatch: const MaterialColor(0xFF36429E, {
          50: Color(0xFFE8EAF6),
          100: Color(0xFFC5CAE9),
          200: Color(0xFF9FA8DA),
          300: Color(0xFF7986CB),
          400: Color(0xFF5C6BC0),
          500: Color(0xFF3F51B5),
          600: Color(0xFF3949AB),
          700: Color(0xFF303F9F),
          800: Color(0xFF283593),
          900: Color(0xFF1A237E)
        }),
      ),
      home: activeUserID == "" ? const LoginS() : const HomeScreen(),),
    );
  }
}