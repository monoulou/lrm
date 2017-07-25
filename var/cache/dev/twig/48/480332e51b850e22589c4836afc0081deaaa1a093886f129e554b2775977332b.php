<?php

/* MALrmBundle:Client:index.html.twig */
class __TwigTemplate_c1722603f36a1ff6973274dbc2c48798298625e4d69ea82a5893744fe2738909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec4f08b710cdd4d5aa649d35017ccb820aeacc8e27904359d36e036b7637887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec4f08b710cdd4d5aa649d35017ccb820aeacc8e27904359d36e036b7637887->enter($__internal_4ec4f08b710cdd4d5aa649d35017ccb820aeacc8e27904359d36e036b7637887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $__internal_600f33b7610636a2e207592d19f6c79006a0fc26b8c715528ae07a0c84564926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600f33b7610636a2e207592d19f6c79006a0fc26b8c715528ae07a0c84564926->enter($__internal_600f33b7610636a2e207592d19f6c79006a0fc26b8c715528ae07a0c84564926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec4f08b710cdd4d5aa649d35017ccb820aeacc8e27904359d36e036b7637887->leave($__internal_4ec4f08b710cdd4d5aa649d35017ccb820aeacc8e27904359d36e036b7637887_prof);

        
        $__internal_600f33b7610636a2e207592d19f6c79006a0fc26b8c715528ae07a0c84564926->leave($__internal_600f33b7610636a2e207592d19f6c79006a0fc26b8c715528ae07a0c84564926_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2a6e219799b3f4937992cb1e70e795be7f3d1326b1f4e8bb307e6d50700e6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a6e219799b3f4937992cb1e70e795be7f3d1326b1f4e8bb307e6d50700e6bc->enter($__internal_e2a6e219799b3f4937992cb1e70e795be7f3d1326b1f4e8bb307e6d50700e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1817bec8c932eaaab57fd7810afe12c480c26e3df306d10f3e0419e9615b916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1817bec8c932eaaab57fd7810afe12c480c26e3df306d10f3e0419e9615b916e->enter($__internal_1817bec8c932eaaab57fd7810afe12c480c26e3df306d10f3e0419e9615b916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_1817bec8c932eaaab57fd7810afe12c480c26e3df306d10f3e0419e9615b916e->leave($__internal_1817bec8c932eaaab57fd7810afe12c480c26e3df306d10f3e0419e9615b916e_prof);

        
        $__internal_e2a6e219799b3f4937992cb1e70e795be7f3d1326b1f4e8bb307e6d50700e6bc->leave($__internal_e2a6e219799b3f4937992cb1e70e795be7f3d1326b1f4e8bb307e6d50700e6bc_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bea73c67542eeeb222a0f6e6dd84d2e19898728d48d27553efddf678ae679ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bea73c67542eeeb222a0f6e6dd84d2e19898728d48d27553efddf678ae679ff->enter($__internal_4bea73c67542eeeb222a0f6e6dd84d2e19898728d48d27553efddf678ae679ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_63b560824607817de299a46ee28f174c3a21408d1124f648e5b666c4a1a582e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b560824607817de299a46ee28f174c3a21408d1124f648e5b666c4a1a582e1->enter($__internal_63b560824607817de299a46ee28f174c3a21408d1124f648e5b666c4a1a582e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_63b560824607817de299a46ee28f174c3a21408d1124f648e5b666c4a1a582e1->leave($__internal_63b560824607817de299a46ee28f174c3a21408d1124f648e5b666c4a1a582e1_prof);

        
        $__internal_4bea73c67542eeeb222a0f6e6dd84d2e19898728d48d27553efddf678ae679ff->leave($__internal_4bea73c67542eeeb222a0f6e6dd84d2e19898728d48d27553efddf678ae679ff_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_747add50026a4e7263b6e61287706eed581c1d41f2ab8f216df15ff51070110b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747add50026a4e7263b6e61287706eed581c1d41f2ab8f216df15ff51070110b->enter($__internal_747add50026a4e7263b6e61287706eed581c1d41f2ab8f216df15ff51070110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a4f2073c0b5a823cfc01413d94b400ebbf82c4c2438ff0b298ea665ee8a5a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4f2073c0b5a823cfc01413d94b400ebbf82c4c2438ff0b298ea665ee8a5a13->enter($__internal_2a4f2073c0b5a823cfc01413d94b400ebbf82c4c2438ff0b298ea665ee8a5a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 82
            echo "                    <tr>
                        <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "villeCodePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "typeClient", array()), "html", null, true);
            echo "</td>
                        ";
            // line 89
            if (twig_test_empty($this->getAttribute($context["client"], "partenaire", array()))) {
                // line 90
                echo "                            <td> -- </td>
                        ";
            } else {
                // line 92
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "partenaire", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 94
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>/<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_delete", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_2a4f2073c0b5a823cfc01413d94b400ebbf82c4c2438ff0b298ea665ee8a5a13->leave($__internal_2a4f2073c0b5a823cfc01413d94b400ebbf82c4c2438ff0b298ea665ee8a5a13_prof);

        
        $__internal_747add50026a4e7263b6e61287706eed581c1d41f2ab8f216df15ff51070110b->leave($__internal_747add50026a4e7263b6e61287706eed581c1d41f2ab8f216df15ff51070110b_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 98,  255 => 95,  250 => 94,  244 => 92,  240 => 90,  238 => 89,  234 => 88,  230 => 87,  226 => 86,  222 => 85,  214 => 84,  208 => 83,  205 => 82,  201 => 81,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}


    {% block javascripts %}
        <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
    {% endblock %}



{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES ENTREPRISES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES ENTREPRISES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Denomination</th>
                    <th>Adresse</th>
                    <th>Nom du contact</th>
                    <th>Fonction</th>
                    <th>Téléphone</th>
                    <th>Type client</th>
                    <th>Partenaire</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for client in clients %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_client_show', { 'id': client.id }) }}\">{{ client.denomination }}</a></td>
                        <td>{{ client.adresse }}-{{ client.villeCodePostal }} {{ client.ville }}</td>
                        <td>{{ client.nomContact }}</td>
                        <td>{{ client.fonctionContact }}</td>
                        <td>{{ client.telephone }}</td>
                        <td>{{ client.typeClient }}</td>
                        {% if client.partenaire is empty %}
                            <td> -- </td>
                        {% else %}
                            <td>{{ client.partenaire }}</td>
                        {% endif %}
                        <td>{{ client.etat }}</td>
                        <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_client_delete', { 'id': client.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce client ?')\";>Supprimer</a></td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Client:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\index.html.twig");
    }
}
