{ pkgs ? import <nixpkgs> {} }:

pkgs.mkShell {
  buildInputs = [
    pkgs.php81
    pkgs.composer
  ];

  shellHook = ''
    export COMPOSER_HOME="$HOME/.composer"
  '';
}
