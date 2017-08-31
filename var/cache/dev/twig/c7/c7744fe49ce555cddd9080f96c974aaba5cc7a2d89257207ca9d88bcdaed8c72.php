<?php

/* ::connexion.html.twig */
class __TwigTemplate_11d32580a61ecb7457b6cf8dc44ed15933d64f8110c8c7d72f0f11949f06c96f extends Twig_Template
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
        $__internal_e827896bc818113309c416a3d62677aa907e4535b36f1f7db8cf4d8d4b2ad47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e827896bc818113309c416a3d62677aa907e4535b36f1f7db8cf4d8d4b2ad47f->enter($__internal_e827896bc818113309c416a3d62677aa907e4535b36f1f7db8cf4d8d4b2ad47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::connexion.html.twig"));

        $__internal_7bb51f799e77c35435b02ac723693d1ff26fdb1bb9e57958e9f8a4a3174d52e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb51f799e77c35435b02ac723693d1ff26fdb1bb9e57958e9f8a4a3174d52e9->enter($__internal_7bb51f799e77c35435b02ac723693d1ff26fdb1bb9e57958e9f8a4a3174d52e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::connexion.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        if (((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")) == true)) {
            // line 3
            echo "    <div class=\"col-lg-offset-10\">
        ";
            // line 4
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 5
                echo "        <i class=\"material-icons\">person</i> Bonjour, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "--<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a>
    </div>
    <div class=\" row\">
        <div class=\"col-lg-offset-10\">
            <i class=\"material-icons\">person_add</i><a href=\"";
                // line 9
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_register");
                echo "\"> Créer un compte </a>
        </div>
    </div>
";
            } else {
                // line 13
                echo "    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a>
    ";
            }
            // line 15
            echo "</div>
";
        } else {
            // line 17
            echo "    <div class=\"col-lg-offset-10\">
        ";
            // line 18
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 19
                echo "            <i class=\"material-icons\">person</i>Bonjour, ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "--<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">Déconnexion</a>
        ";
            } else {
                // line 21
                echo "            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
                echo "\">Connexion</a>
        ";
            }
            // line 23
            echo "    </div>
    ";
        }
        // line 25
        echo "</div>";
        
        $__internal_e827896bc818113309c416a3d62677aa907e4535b36f1f7db8cf4d8d4b2ad47f->leave($__internal_e827896bc818113309c416a3d62677aa907e4535b36f1f7db8cf4d8d4b2ad47f_prof);

        
        $__internal_7bb51f799e77c35435b02ac723693d1ff26fdb1bb9e57958e9f8a4a3174d52e9->leave($__internal_7bb51f799e77c35435b02ac723693d1ff26fdb1bb9e57958e9f8a4a3174d52e9_prof);

    }

    public function getTemplateName()
    {
        return "::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  81 => 23,  75 => 21,  67 => 19,  65 => 18,  62 => 17,  58 => 15,  52 => 13,  45 => 9,  35 => 5,  33 => 4,  30 => 3,  28 => 2,  25 => 1,);
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
    <div class=\"col-lg-offset-10\">
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
    </div>
    <div class=\" row\">
        <div class=\"col-lg-offset-10\">
            <i class=\"material-icons\">person_add</i><a href=\"{{ path('ma_lrm_register') }}\"> Créer un compte </a>
        </div>
    </div>
{% else %}
    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
    {% endif %}
</div>
{% else %}
    <div class=\"col-lg-offset-10\">
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <i class=\"material-icons\">person</i>Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
        {% endif %}
    </div>
    {% endif %}
</div>", "::connexion.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/connexion.html.twig");
    }
}
