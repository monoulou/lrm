<?php

/* MAUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9ea570167ec51c5d4d2024b14ad63d8b9ce69f242d41643acb2a0fe669673724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c7290c385510ccb2ad3ecb157e2f5f973057eadba952a0bafbfe6ba78d8f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c7290c385510ccb2ad3ecb157e2f5f973057eadba952a0bafbfe6ba78d8f3f->enter($__internal_74c7290c385510ccb2ad3ecb157e2f5f973057eadba952a0bafbfe6ba78d8f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register_content.html.twig"));

        $__internal_e899dc87664cf28697eecd2b73fc32494bf933ecc96deed39518e6f834fd15dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e899dc87664cf28697eecd2b73fc32494bf933ecc96deed39518e6f834fd15dc->enter($__internal_e899dc87664cf28697eecd2b73fc32494bf933ecc96deed39518e6f834fd15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"register_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8\">
            ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>-- Revenir à <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
            echo "\">l'accueil</a>--
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            ";
        }
        // line 15
        echo "        </div>
    </div>
    <div class=\"row\">
        <h3 id=\"registration_title\">AJOUT D'UN UTILISATEUR</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_registration\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_74c7290c385510ccb2ad3ecb157e2f5f973057eadba952a0bafbfe6ba78d8f3f->leave($__internal_74c7290c385510ccb2ad3ecb157e2f5f973057eadba952a0bafbfe6ba78d8f3f_prof);

        
        $__internal_e899dc87664cf28697eecd2b73fc32494bf933ecc96deed39518e6f834fd15dc->leave($__internal_e899dc87664cf28697eecd2b73fc32494bf933ecc96deed39518e6f834fd15dc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cd9c6ea06a71be06cfd254cae89648061f004057222118891d6466e08f89d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd9c6ea06a71be06cfd254cae89648061f004057222118891d6466e08f89d2e->enter($__internal_2cd9c6ea06a71be06cfd254cae89648061f004057222118891d6466e08f89d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ec01820c2852766ca92cde40820623b2bdb2cbee96b241deeea4d1571ba8118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec01820c2852766ca92cde40820623b2bdb2cbee96b241deeea4d1571ba8118->enter($__internal_5ec01820c2852766ca92cde40820623b2bdb2cbee96b241deeea4d1571ba8118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/register_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_5ec01820c2852766ca92cde40820623b2bdb2cbee96b241deeea4d1571ba8118->leave($__internal_5ec01820c2852766ca92cde40820623b2bdb2cbee96b241deeea4d1571ba8118_prof);

        
        $__internal_2cd9c6ea06a71be06cfd254cae89648061f004057222118891d6466e08f89d2e->leave($__internal_2cd9c6ea06a71be06cfd254cae89648061f004057222118891d6466e08f89d2e_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 4,  93 => 3,  78 => 27,  73 => 25,  68 => 23,  64 => 22,  55 => 15,  49 => 13,  39 => 11,  37 => 10,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/register_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"register_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>-- Revenir à <a href=\"{{ path('ma_lrm_accueil')}}\">l'accueil</a>--
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            {% endif %}
        </div>
    </div>
    <div class=\"row\">
        <h3 id=\"registration_title\">AJOUT D'UN UTILISATEUR</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_registration\">
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
            {{ form_widget(form) }}
            <div>
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>
", "MAUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
