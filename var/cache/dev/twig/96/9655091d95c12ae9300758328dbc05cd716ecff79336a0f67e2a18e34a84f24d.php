<?php

/* @MAUser/Security/login_content.html.twig */
class __TwigTemplate_08353b760501fe05789dad1f165af53b2d3f925ae24c41733fbc4fb92febc7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54dbabae44c6f51b15bf056e3839396f32d6d34ea8c67a0136e5d9b2bc570981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54dbabae44c6f51b15bf056e3839396f32d6d34ea8c67a0136e5d9b2bc570981->enter($__internal_54dbabae44c6f51b15bf056e3839396f32d6d34ea8c67a0136e5d9b2bc570981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

        $__internal_0df1c128850a4b4ce258edb9737ef2d5c719a56416baae263e771d2888effa97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df1c128850a4b4ce258edb9737ef2d5c719a56416baae263e771d2888effa97->enter($__internal_0df1c128850a4b4ce258edb9737ef2d5c719a56416baae263e771d2888effa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Security/login_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "



";
        
        $__internal_54dbabae44c6f51b15bf056e3839396f32d6d34ea8c67a0136e5d9b2bc570981->leave($__internal_54dbabae44c6f51b15bf056e3839396f32d6d34ea8c67a0136e5d9b2bc570981_prof);

        
        $__internal_0df1c128850a4b4ce258edb9737ef2d5c719a56416baae263e771d2888effa97->leave($__internal_0df1c128850a4b4ce258edb9737ef2d5c719a56416baae263e771d2888effa97_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_855945d0f441a0d96531a14bc75bc21053d6c6c8bc034fe72c8af8c1bca74177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855945d0f441a0d96531a14bc75bc21053d6c6c8bc034fe72c8af8c1bca74177->enter($__internal_855945d0f441a0d96531a14bc75bc21053d6c6c8bc034fe72c8af8c1bca74177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d0df9bb4526e6e9bd3e7eee5d0c0b34653e1e3e2f20b42efef84b25910ab477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0df9bb4526e6e9bd3e7eee5d0c0b34653e1e3e2f20b42efef84b25910ab477->enter($__internal_5d0df9bb4526e6e9bd3e7eee5d0c0b34653e1e3e2f20b42efef84b25910ab477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        
        $__internal_5d0df9bb4526e6e9bd3e7eee5d0c0b34653e1e3e2f20b42efef84b25910ab477->leave($__internal_5d0df9bb4526e6e9bd3e7eee5d0c0b34653e1e3e2f20b42efef84b25910ab477_prof);

        
        $__internal_855945d0f441a0d96531a14bc75bc21053d6c6c8bc034fe72c8af8c1bca74177->leave($__internal_855945d0f441a0d96531a14bc75bc21053d6c6c8bc034fe72c8af8c1bca74177_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15601b296b75be64804d96a3c7e789640793d9d18b2b018c69076417142cd333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15601b296b75be64804d96a3c7e789640793d9d18b2b018c69076417142cd333->enter($__internal_15601b296b75be64804d96a3c7e789640793d9d18b2b018c69076417142cd333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b183c14ad91eae1c965dead4c766db0046cb3f1ef5701f85deb19a7d65d36a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b183c14ad91eae1c965dead4c766db0046cb3f1ef5701f85deb19a7d65d36a9d->enter($__internal_b183c14ad91eae1c965dead4c766db0046cb3f1ef5701f85deb19a7d65d36a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "

    <div class=\"container\">

        <div class=\"row\" id=\"row_connexion\">
            ";
        // line 16
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                <div class=\"row\">
                    <div class=\"col-lg-offset-4 col-lg-4\">
                        <div class=\"alert alert-danger\" id=\"message_error\">
                        <i class=\"icon icon-times-circle icon-lg\"></i>
                        <strong>Erreur !</strong> IDENTIFIANTS INCCORECTS
                    </div>
                    </div>
                    <!--<div class=\"alert alert-danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>-->
                </div>
            ";
        }
        // line 27
        echo "            <div class=\"col-lg-offset-4 col-lg-4\" id=\"form_box\">
                <form class=\"form-horizontal\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                    <div id=\"form_field\">
                        <fieldset>
                            <legend class=\"\">Connexion</legend>
                            <div id=\"input_form\">
                                <div class=\"control-group\">
                                    <!-- Username -->
                                    <label class=\"control-label\"  for=\"username\">Utilisateur</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <!-- Password-->
                                    <label class=\"control-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"controls\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"control-group\">
                                    <!-- Remenber me-->
                                    <label for=\"remember_me\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>
                                <div><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a></div>
                                <div class=\"control-group\">
                                    <!-- Button -->
                                    <div class=\"controls\">
                                        <button type=\"submit\" value=\"Connexion\" class=\"btn btn-success\" id=\"button_connexion\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_b183c14ad91eae1c965dead4c766db0046cb3f1ef5701f85deb19a7d65d36a9d->leave($__internal_b183c14ad91eae1c965dead4c766db0046cb3f1ef5701f85deb19a7d65d36a9d_prof);

        
        $__internal_15601b296b75be64804d96a3c7e789640793d9d18b2b018c69076417142cd333->leave($__internal_15601b296b75be64804d96a3c7e789640793d9d18b2b018c69076417142cd333_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d91bbcee0e8ce1376648722c9e49b6333497ca8a5788aa0c1662c9b283a94d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d91bbcee0e8ce1376648722c9e49b6333497ca8a5788aa0c1662c9b283a94d1->enter($__internal_6d91bbcee0e8ce1376648722c9e49b6333497ca8a5788aa0c1662c9b283a94d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0505c5412237841a197bf528bd0ac16e7adb9984699c44aafb5563325eb6c626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0505c5412237841a197bf528bd0ac16e7adb9984699c44aafb5563325eb6c626->enter($__internal_0505c5412237841a197bf528bd0ac16e7adb9984699c44aafb5563325eb6c626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0505c5412237841a197bf528bd0ac16e7adb9984699c44aafb5563325eb6c626->leave($__internal_0505c5412237841a197bf528bd0ac16e7adb9984699c44aafb5563325eb6c626_prof);

        
        $__internal_6d91bbcee0e8ce1376648722c9e49b6333497ca8a5788aa0c1662c9b283a94d1->leave($__internal_6d91bbcee0e8ce1376648722c9e49b6333497ca8a5788aa0c1662c9b283a94d1_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Security/login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 70,  154 => 53,  148 => 50,  132 => 37,  120 => 28,  117 => 27,  111 => 24,  102 => 17,  99 => 16,  92 => 10,  83 => 9,  69 => 5,  60 => 4,  46 => 72,  44 => 70,  41 => 69,  39 => 9,  36 => 8,  34 => 4,  31 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/login.css') }}\" rel='stylesheet' type='text/css' />

{% endblock %}

{% block fos_user_content %}


    <div class=\"container\">

        <div class=\"row\" id=\"row_connexion\">
            {# S'il y a une erreur, on l'affiche dans un joli cadre #}
            {% if error %}
                <div class=\"row\">
                    <div class=\"col-lg-offset-4 col-lg-4\">
                        <div class=\"alert alert-danger\" id=\"message_error\">
                        <i class=\"icon icon-times-circle icon-lg\"></i>
                        <strong>Erreur !</strong> IDENTIFIANTS INCCORECTS
                    </div>
                    </div>
                    <!--<div class=\"alert alert-danger\">{{ error.message }}</div>-->
                </div>
            {% endif %}
            <div class=\"col-lg-offset-4 col-lg-4\" id=\"form_box\">
                <form class=\"form-horizontal\" action=\"{{ path('fos_user_security_check') }}\" method=\"POST\">
                    <div id=\"form_field\">
                        <fieldset>
                            <legend class=\"\">Connexion</legend>
                            <div id=\"input_form\">
                                <div class=\"control-group\">
                                    <!-- Username -->
                                    <label class=\"control-label\"  for=\"username\">Utilisateur</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <!-- Password-->
                                    <label class=\"control-label\" for=\"password\">Mot de passe</label>
                                    <div class=\"controls\">
                                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"input-xlarge\">
                                    </div>
                                </div>
                                <br>
                                <div class=\"control-group\">
                                    <!-- Remenber me-->
                                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                </div>
                                <div><a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a></div>
                                <div class=\"control-group\">
                                    <!-- Button -->
                                    <div class=\"controls\">
                                        <button type=\"submit\" value=\"Connexion\" class=\"btn btn-success\" id=\"button_connexion\">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </form>
            </div>
        </div>
    </div>
{% endblock fos_user_content%}

{% block javascripts %}
{% endblock %}




", "@MAUser/Security/login_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
