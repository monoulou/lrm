<?php

/* connexion.html.twig */
class __TwigTemplate_d39fe49080ebf77c98548a5eb61a0f634bbde7949d7c8ed19c5b3fab6de0441b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ecf0e9a2c77fb4578192cc29476bed400f89712a69589f8ec5fbbb33c2a9b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecf0e9a2c77fb4578192cc29476bed400f89712a69589f8ec5fbbb33c2a9b7c->enter($__internal_1ecf0e9a2c77fb4578192cc29476bed400f89712a69589f8ec5fbbb33c2a9b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_f00effbf91af00c0af01005e4a97dcdf37b543a3e9803ae07952292df7852723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00effbf91af00c0af01005e4a97dcdf37b543a3e9803ae07952292df7852723->enter($__internal_f00effbf91af00c0af01005e4a97dcdf37b543a3e9803ae07952292df7852723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        if (((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")) == true)) {
            // line 3
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 4
                echo "            <div class=\"col-lg-2\" style=\"margin-left: -120px\"><i class=\"material-icons\">perm_identity</i>Bonjour, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
                // line 5
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\"><i class=\"material-icons\">input</i></a></div>
            <div class=\" row\">
                <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                    <i class=\"material-icons\">person_add</i><a href=\"";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_register");
                echo "\"> Créer un compte </a>
                </div>
            </div>
        ";
            } else {
                // line 12
                echo "            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a></div>
        ";
            }
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        <div class=\"row\">
            ";
            // line 16
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 17
                echo "                <div class=\"col-lg-2\" style=\"margin-left: -120px\"><i class=\"material-icons\">perm_identity</i>Bonjour, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</div>
                <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\"><a href=\"";
                // line 18
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\"><i class=\"material-icons\">input</i></a></div>
            ";
            } else {
                // line 20
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a>
            ";
            }
            // line 22
            echo "        </div>
    ";
        }
        // line 24
        echo "</div>

";
        
        $__internal_1ecf0e9a2c77fb4578192cc29476bed400f89712a69589f8ec5fbbb33c2a9b7c->leave($__internal_1ecf0e9a2c77fb4578192cc29476bed400f89712a69589f8ec5fbbb33c2a9b7c_prof);

        
        $__internal_f00effbf91af00c0af01005e4a97dcdf37b543a3e9803ae07952292df7852723->leave($__internal_f00effbf91af00c0af01005e4a97dcdf37b543a3e9803ae07952292df7852723_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 22,  75 => 20,  70 => 18,  65 => 17,  63 => 16,  60 => 15,  57 => 14,  51 => 12,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    {% if register == true %}
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <div class=\"col-lg-2\" style=\"margin-left: -120px\"><i class=\"material-icons\">perm_identity</i>Bonjour, {{ app.user.username }}</div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
            <div class=\" row\">
                <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                    <i class=\"material-icons\">person_add</i><a href=\"{{ path('ma_lrm_register') }}\"> Créer un compte </a>
                </div>
            </div>
        {% else %}
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\"><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></div>
        {% endif %}
    {% else %}
        <div class=\"row\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <div class=\"col-lg-2\" style=\"margin-left: -120px\"><i class=\"material-icons\">perm_identity</i>Bonjour, {{ app.user.username }}</div>
                <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            {% endif %}
        </div>
    {% endif %}
</div>

{#
<script>
    \$(document).ready(function () {
        \$(\"#logout\").mouseover(function(){
            \$( this ).append( \$( \"<span>Déconnexion</span>\" ) );
        });
        \$(\"#logout\").mouseout(function(){

        });
    })
</script>#}
", "connexion.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\connexion.html.twig");
    }
}
